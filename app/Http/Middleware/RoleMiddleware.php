<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login_form');
        }

        $userRole = Auth::user()->role;

        // Agar required role aur user ka role match karte hain
        if ($role === $userRole) {
            return $next($request);
        }

        // Agar role "admin" diya gaya hai, aur user bhi admin hai
        if ($role === 'admin' && $userRole === 'admin') {
            return $next($request);
        }

        if ($role === 'user' && $userRole === 'user') {
            return $next($request);
        }

        // Kisi bhi aur case me access deny
        abort(403, 'Access Denied: You do not have ' . $role . ' privileges.');
    }
}
