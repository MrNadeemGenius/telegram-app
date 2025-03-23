<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; // Make sure to import your Admin model

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Retrieve admin credentials from session
        $adminUsername = $request->session()->get('admin_username');
        $adminPassword = $request->session()->get('admin_password');

        // Check if both are set and if they match a record in the database
        if ($adminUsername && $adminPassword) {
            // Find the admin by username
            $admin = Admin::where('username', $adminUsername)->first();

            // Check if the admin exists and the password matches
            if ($admin && $adminPassword == $admin->password) {
                return $next($request); // Credentials are valid, proceed to the next request
            }
        }

        // If not authenticated, redirect to login route
        return redirect()->route('admin.login');
    }
}
