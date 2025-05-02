<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status === 'inactive') {
            Auth::logout(); // Đăng xuất
            return redirect()->route('login')->withErrors([
                'block_reason' => 'Tài khoản của bạn đã bị vô hiệu hóa.',
            ]);
        }

        return $next($request);
    }
}
