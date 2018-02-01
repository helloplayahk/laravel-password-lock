<?php

namespace Playa\PasswordLock;

use Closure;
use Illuminate\Support\Facades\Auth;

class PasswordLockMiddleware
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

        if(!config('playa-password-lock.enable')){
            return $next($request);
        }

        if($request->method() == "POST" && $request->path() == "playa/password-lock"){
            return $next($request);
        }

        if (Auth::guard($guard)->check()) {
            return $next($request);
        }

        if ($request->session()->has('playa-password-lock-authed')){
            return $next($request);
        }

        return response()->view('playa-password-lock::index');
    }
}
