<?php

namespace App\Http\Middleware;

use Closure;

class CheckSession
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
        if ($request->session()->exists('status') != '1') {
            return redirect()->route('login.admin')->with(['error' => 'Eits, Silahkan masuk untuk melanjutkan !']);
        }
        return $next($request);
    }
}
