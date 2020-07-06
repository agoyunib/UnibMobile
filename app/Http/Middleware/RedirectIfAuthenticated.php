<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check() && Auth::guard('admin')->user()->role == 'Admin' && Auth::guard('admin')->user()->status == 'true') {
                    return redirect()->route('admin.dashboard');
                } elseif (Auth::guard($guard)->check() && Auth::guard('admin')->user()->role == 'Fakultas' && Auth::guard('admin')->user()->status == 'true') {
                    return redirect()->route('fakultas.dashboard');
                } elseif (Auth::guard($guard)->check() && Auth::guard('admin')->user()->role == 'Admin' && Auth::guard('admin')->user()->status == 'true') {
                    return redirect()->route('admin.dashboard');
                } elseif (Auth::guard($guard)->check() && Auth::guard('admin')->user()->status == 'false') {
                    Auth::guard('admin')->logout();
                    return redirect()->route('login.admin')->with(['error'    =>  'Akun tidak aktif, silahkan hubungi Operator!']);
                }
                break;
            default:
                if (Auth::check()) {
                    // tambahkan route home dashboard orang tua
                    return redirect(RouteServiceProvider::HOME);
                } else {
                    Auth::logout();
                }
                break;
        }

        return $next($request);
    }
}
