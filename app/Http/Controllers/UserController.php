<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DailyAds;
use App\Models\Settings;
use App\Models\Withdraw;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request) 
    {
        // Save the user's IP address in the session
        $request->session()->put('user_ip', $request->ip());
    
        // Retrieve all payment methods
        $PaymentMethod = PaymentMethod::all();
    
        // Pass data to the view
        return view('welcome', compact('PaymentMethod'));
    }

    
    
    public function withdraw(Request $request)
    {
        if (!$request->session()->has('user_ip') AND $request->session()->get('user_ip') !== $request->ip()) {
            return 'YoU hAve hACKED bRo';
        }
        try {
            $telegramId = $request->input('telegram_id');
            $amount = $request->input('amount');
            $paymentMethodId = $request->input('payment_method_id');
            
            // Validate inputs
            if (empty($telegramId) || empty($amount) || empty($paymentMethodId)) {
                return response()->json([
                    'success' => false,
                    'message' => 'All fields are required.'
                ], 200);
            }
    
            $user = User::where('telegram_id', $telegramId)->first();
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not found.'], 404);
            }
    
            // Check payment method and limits
            $paymentMethod = PaymentMethod::find($paymentMethodId);
            if (!$paymentMethod) {
                return response()->json(['success' => false, 'message' => 'Invalid payment method.'], 400);
            }
    
            $minAmount = $paymentMethod->minimum;
            $maxAmount = $paymentMethod->maximum;
            if ($amount < $minAmount || $amount > $maxAmount) {
                return response()->json([
                    'success' => false,
                    'message' => "Amount must be between $minAmount and $maxAmount."
                ], 200);
            }
    
            // Check user balance
            if ($user->balance < $amount) {
                return response()->json([
                    'success' => false,
                    'message' => 'Insufficient balance.'
                ], 200);
            }
    
            // Deduct amount and save withdrawal record
            $user->balance -= $amount;
            $user->save();
    
            $withdrawal = Withdraw::create([
                'user_id' => $user->telegram_id, // Manually add user ID
                'amount' => $request->amount,
                'method_id' => $request->payment_method_id,
                'status' => 'Pending',
                'address' => $request->address,
            ]);
    
            // Retrieve updated data for response
            $dailyAds = DailyAds::where('user_id', $user->telegram_id)->get();
            $todayAdsCount = DailyAds::where('user_id', $user->telegram_id)->where('date', now()->format('Y-m-d'))->sum('ads');
    
            return response()->json([
                'success' => true,
                'message' => 'Withdrawal request submitted successfully.',
                'user' => $user,'refferCount' => $user->referralCount(),  'reffers' => $user->referrals(),
                'today_ads' => $todayAdsCount,
                'ads_limit' => Settings::first()->ads_limit ?? 0,
                'today_earning' => DailyAds::where('user_id', $user->telegram_id)->where('date', now()->format('Y-m-d'))->sum('earning'),
                'lifetime_earning' => $dailyAds->sum('earning'),
                'totalAdsWatched' => $dailyAds->sum('ads'),
                'withdrawal' => $withdrawal
            ]);
        } catch (\Exception $e) {
            Log::error('Error processing withdrawal: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing the withdrawal. ' . $e->getMessage()
            ], 500);
        }
    }

    
    
    
public function checkOrCreate(Request $request)
{
    if (!$request->session()->has('user_ip') && $request->session()->get('user_ip') !== $request->ip()) {
        return 'YoU hAve hACKED bRo';
    }
    
    if (!$request->hasHeader('X-Csrf-Token') || !$request->headers->get('X-Csrf-Token') === session()->token()) {
        return response()->json(['error' => 'Invalid CSRF token.'], 403);
    }

    $userAgent = $request->header('User-Agent');
    if (!Str::contains($userAgent, ['TelegramBot', 'Mozilla/5.0'])) {
        return response()->json(['error' => 'Invalid User-Agent.'], 403);
    }

    try {
        $allowedOrigins = ['https://paisa.digitalmarkeet.in'];
        $origin = $request->headers->get('origin') ?? $request->headers->get('referer');

        if (!in_array($origin, $allowedOrigins)) {
            return response()->json(['success' => false, 'message' => 'Invalid origin: ' . $origin], 403);
        }

        $userData = $request->only(['first_name', 'last_name', 'username', 'language_code', 'photo_url', 'id', 'referral_code']);

        if (!isset($userData['id'])) {
            return response()->json([
                'success' => false,
                'message' => 'Telegram ID is required.'
            ], 400);
        }

        $userArray = [
            'first_name' => $userData['first_name'] ?? '',
            'last_name' => $userData['last_name'] ?? '',
            'username' => $userData['username'] ?? '',
            'language_code' => $userData['language_code'] ?? '',
            'photo_url' => $userData['photo_url'] ?? 'https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg',
            'telegram_id' => $userData['id'],
            'referral_code' => $userData['referral_code'] ?? null,
            'balance' => 0,
            'is_premium' => $userData['is_premium'] ?? false
        ];

        // Check if the user already exists
        $user = User::where('telegram_id', $userArray['telegram_id'])->first();

        if (!$user) {

            // Create the new user
            $user = User::create($userArray);
        }

        // Retrieve the settings
        $settings = Settings::first();
        $adsLimit = $settings ? $settings->ads_limit : 0;

        // Ensure the date is in 'Y-m-d' format
        $today = now()->format('Y-m-d');

        // Retrieve or create today's ads record for the user
        $dailyAd = DailyAds::firstOrCreate(
            ['user_id' => $user->telegram_id, 'date' => $today],
            ['ads' => 0, 'earning' => 0]
        );

        $dailyAds = DailyAds::where('user_id', $user->telegram_id)->get();
        $todayAdsCount = $dailyAd->ads;

        return response()->json([
            'success' => true,
            'user' => $user,'refferCount' => $user->referralCount(),  'reffers' => $user->referrals(),
            'today_ads' => $todayAdsCount,
            'ads_limit' => $adsLimit,
            'today_earning' => $dailyAd->earning,
            'lifetime_earning' => $dailyAds->sum('earning'),
            'totalAdsWatched' => $dailyAds->sum('ads'),
        ]);

    } catch (\Exception $e) {
        Log::error('Error creating or fetching user: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'An error occurred while processing your request. ' . $e->getMessage()
        ], 500);
    }
}



   public function rewardUser(Request $request)
    {
        $currentTime = Carbon::now();
        if ($request->session()->has('last_reward_time')) {
            // Get the last reward time and the current time
            $lastRewardTime = $request->session()->get('last_reward_time');
            
            
            // Calculate the difference in seconds
            $timeDifference = $currentTime->diffInSeconds(Carbon::parse($lastRewardTime));
            
            // Check if the time difference is less than or equal to 12 seconds
            if ($timeDifference <= 9) {
                // Optionally, you could log the user’s IP to blacklist them
                // Here, you might want to store the IP or add it to a blacklist
                // You can either store in a database or a session, e.g.:
                $request->session()->put('blacklisted_ip', $request->ip());
                
                // Return an error message about the blacklisting
                return response('You are blacklisted for spamming rewards.', 403);
            }
        }
        
        // Update the last_reward_time to the current time after passing the check
        


            
        if (!$request->hasHeader('X-Csrf-Token') || !$request->headers->get('X-Csrf-Token') === session()->token()) {
            return response()->json(['error' => 'Invalid CSRF token.'], 403);
        }
    
        $userAgent = $request->header('User-Agent');
        if (!Str::contains($userAgent, ['TelegramBot', 'Mozilla/5.0'])) {
            return response()->json(['error' => 'Invalid User-Agent.'], 403);
        }
    
        $settings = Settings::first();
        try {
            
             $allowedOrigins = ['https://paisa.digitalmarkeet.in'];
            $origin = $request->headers->get('origin') ?? $request->headers->get('referer');
        
            if (!in_array($origin, $allowedOrigins)) {
                return response()->json(['success' => false, 'message' => 'Invalid origin.' . $origin], 403);
            }
            
            
            $telegramId = $request->input('telegram_id');
            $user = User::where('telegram_id', $telegramId)->first();
    
            if ($user) {
                $rewardAmount = $settings->ads_reward;
                $adsLimit = $settings->ads_limit;
                $today = now()->toDateString();
    
                // Retrieve or create today's DailyAds record for the user
                $dailyAd = DailyAds::firstOrCreate(
                    ['user_id' => $user->telegram_id, 'date' => $today],
                    ['ads' => 0, 'earning' => 0]
                );
    
                // Check if the ads count has reached the daily limit
                if ($dailyAd->ads >= $adsLimit) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Daily Ad Limit is Over',
                        'today_ads' => $dailyAd->ads,
                        'ads_limit' => $adsLimit,
                    ], 403); // Forbidden
                }
    
                // Increment ads count and earnings for today
                $dailyAd->ads += 1;
                $dailyAd->earning += $rewardAmount;
                $dailyAd->save();
    
             // Update the user's balance
                $user->balance += $rewardAmount;
                $user->save();
                

                if ($user->referrer) {
                    // Calculate the bonus amount for the referrer
                    $bonusAmount = $rewardAmount * ($settings->reffer_bonus / 100);
                    $refferer =$user->referrer;
                    $refferer->balance += $bonusAmount;
                    $refferer->save();
                }

    
    
    
                // Retrieve user's lifetime stats
                $dailyAds = DailyAds::where('user_id', $user->telegram_id)->get();
                $todayAdsCount = $dailyAd->ads;
                $lifetimeEarning = $dailyAds->sum('earning');
                $totalAdsWatched = $dailyAds->sum('ads');
    
                // Prepare response with all requested data
                return response()->json([
                    'success' => true,
                    'user' => $user,'refferCount' => $user->referralCount(),  'reffers' => $user->referrals(),
                    'new_balance' => $user->balance,
                    'today_ads' => $todayAdsCount,
                    'ads_limit' => $adsLimit,
                    'today_earning' => $dailyAd->earning,
                    'lifetime_earning' => $lifetimeEarning,
                    'totalAdsWatched' => $totalAdsWatched,
                ]);
            }
    
            return response()->json(['success' => false, 'message' => 'User not found.'], 404); // Not Found
        } catch (\Exception $e) {
            Log::error('Error rewarding user: ' . $e->getMessage());
    
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while rewarding the user. ' . $e->getMessage()
            ], 500); // Internal Server Error
        }
    }

}