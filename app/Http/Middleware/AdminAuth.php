<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        // Check if user is logged in AND is admin
        if (!Auth::check() || Auth::user()->is_admin != 1) {
            return redirect('/admin/login')->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}
