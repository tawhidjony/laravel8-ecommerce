<?php

namespace App\Http\Middleware;


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
        if (Auth::guard($guard)->check() && Auth::User()->type == 'admin') {
            return redirect()->route('home');
        }elseif (Auth::guard($guard)->check() && Auth::User()->type == 'customer'){
            return redirect()->route('profile.buyer');
        }else{
           return $next($request);
        }
    }
}
