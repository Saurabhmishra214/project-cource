<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login_form');
        }

        if (Auth::user()->role === 'admin') {
            return $next($request);
        }

        return abort(403, 'Access Denied: You do not have admin privileges.');
    }
}
