<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;
use App\Models\Withdraw;
use App\Models\Settings;
use App\Models\PaymentMethod;

class AdminController extends Controller
{
   public function updatesettings(Request $request) {
        // Validate incoming request data
        $request->validate([
            'ads_reward' => 'required|numeric',
            'ads_limit' => 'required|numeric',
            'reffer_bonus' => 'required|numeric',
            'monetag_id' => 'required|string',
            'currency' => 'required|string',
        ]);
        
        // Retrieve the first settings record or create a new one if none exists
        $settings = Settings::first(); // Get the first settings record
        
        // If there are no existing settings, create a new instance
        if (!$settings) {
            $settings = new Settings();
        }
    
        // Update the settings with request data
        $settings->ads_reward = $request->ads_reward;
        $settings->ads_limit = $request->ads_limit;
        $settings->monetag_id = $request->monetag_id;
        $settings->reffer_bonus = $request->reffer_bonus;
        $settings->currency = $request->currency;
        $settings->save(); // Save the changes
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Settings updated successfully!');
    }


    public function editsettings() {
        return view('admin.settings');
    }
    
    public function showWithdraws() {
        $withdraws = Withdraw::all(); 
        return view('admin.withdraws', compact('withdraws'));
    }
    
    public function markComplete($withdraw) {
        $withdraw = Withdraw::findOrFail($withdraw);
        $withdraw->status = 'Completed'; // Update status
        $withdraw->save(); // Save changes
        return redirect()->route('withdraws.index')->with('success', 'Withdrawal marked as completed successfully!');
    }
    public function markdestroy($withdraw) {
        $withdraw = Withdraw::findOrFail($withdraw);
        $withdraw->delete(); // Save changes
        return redirect()->route('withdraws.index')->with('success', 'Withdrawal deleted successfully!');
    }
    
    public function markFailed($withdraw) {
        // Find the withdrawal record by ID
        $withdraw = Withdraw::findOrFail($withdraw);
        
        // Store the user's ID and the amount to be refunded
        $userId = $withdraw->user_id; // This should be the user_id that corresponds to the withdrawal
        $amount = $withdraw->amount;
    
        // Update withdrawal status
        $withdraw->status = 'Rejected'; // Update status to 'Rejected'
        $withdraw->save(); // Save changes to withdrawal
    
        // Increase user's balance
        $user = User::where('telegram_id', $userId)->firstOrFail(); // Find user by telegram_id
        $user->balance += $amount; // Increase balance by the withdrawal amount
        $user->save(); // Save changes to user balance
    
        // Redirect with a success message
        return redirect()->route('withdraws.index')->with('success', 'Withdrawal marked as failed successfully, and user balance has been updated!');
    }




    // Show the login form
    public function showLoginForm()
    {
        return view('admin.login'); // Ensure you have a login view at resources/views/admin/login.blade.php
    }
    public function methods()
    {
        return view('admin.methods'); // Ensure you have a login view at resources/views/admin/login.blade.php
    }
    
    public function deleteMethod($methodId) {
        $paymentMethod = PaymentMethod::findOrFail($methodId);
    
        $paymentMethod->delete();
    
        return redirect()->back()->with('success', 'Method deleted successfully!');
    }


    public function addMethod(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'minimum' => 'required|numeric|min:0',
            'maximum' => 'required|numeric|min:0',
        ]);

        $paymentMethod = PaymentMethod::create($request->all());

        return redirect()->back()->with('success', 'Method added  successfully!');
    }
    
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Get credentials from request
        $credentials = $request->only('username', 'password');
    
        // Check if the admin exists and the password is correct
        $admin = \App\Models\Admin::where('username', $credentials['username'])->first();
    
        if ($admin && $credentials['password'] == $admin->password) {
            // Store admin username in session
            session(['admin_username' => $credentials['username']]);
            session(['admin_password' => $credentials['password']]);
    
            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }
    
        // If the login attempt was unsuccessful, set an error message in session
        return redirect()->back()->withErrors(['error' => 'Invalid credentials.']);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->back()->with('success', 'User updated successfully');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    // Logout the admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->forget(['admin_username', 'admin_password']); // Clear the session data
        return redirect()->route('admin.login');
    }

    // Show the admin dashboard
    public function index()
    {
        return view('admin.dashboard'); // Ensure you have a dashboard view at resources/views/admin/dashboard.blade.php
    }

    // Show users
    public function showUsers()
    {
        return view('admin.users');
    }

    // Settings page
    public function settings()
    {
        return view('admin.settings'); // Ensure you have a settings view
    }
}
