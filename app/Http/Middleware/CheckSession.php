<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckSession
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Session::get('session_id') !== Session::getId()) {
            Auth::logout();
            return redirect('admin.showFormLogin')->withErrors('Phiên đăng nhập không hợp lệ. Vui lòng đăng nhập lại.');
        }

        return $next($request);
    }
}
