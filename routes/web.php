<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;

Route::any('/', [UserController::class, 'index'])->name('index');

Route::middleware('throttle:5,1')->group(function () {
    Route::post('/user/check-or-create', [UserController::class, 'checkOrCreate'])->name('user.check');
    Route::post('/user/reward', [UserController::class, 'rewardUser'])->name('reward.user');
    Route::post('/user/withdraw', [UserController::class, 'withdraw'])->name('user.withdraw');
});




$admin_prefix = env('ADMIN_PREFIX');
Route::group(['prefix' => $admin_prefix], function () {
    // Login routes that should not require authentication
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
    
    // Routes that require authentication
    Route::group(['middleware' => AdminAuth::class], function () {
        
        Route::get('/settings', [AdminController::class, 'editsettings'])->name('admin.settings');
        Route::put('/settings', [AdminController::class, 'updatesettings'])->name('settings.update');



        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
        Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');
        
        Route::get('/methods', [AdminController::class, 'methods'])->name('admin.methods');
        Route::post('/methods/add', [AdminController::class, 'addMethod'])->name('methods.store');
        Route::get('/methods/{method}', [AdminController::class, 'deleteMethod'])->name('methods.destroy');
        
        Route::get('withdraws', [AdminController::class, 'showWithdraws'])->name('withdraws.index');
        Route::get('withdraws/complete/{withdraw}', [AdminController::class, 'markComplete'])->name('withdraws.complete');
        Route::get('withdraws/destroy/{withdraw}', [AdminController::class, 'markdestroy'])->name('withdraws.destroy');
        Route::get('withdraws/fail/{withdraw}', [AdminController::class, 'markFailed'])->name('withdraws.fail');
        
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/users', [AdminController::class, 'showUsers'])->name('admin.users');
        Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
        // Add more admin routes as needed
    });
});