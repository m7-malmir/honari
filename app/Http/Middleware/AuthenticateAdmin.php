<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/login'); // یا هر صفحه‌ای که می‌خواهید غیرادمین‌ها به آن منتقل شوند
        }

        return $next($request);
    }
}

