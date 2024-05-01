<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->roles == "ADMIN" || Auth::user() && Auth::user()->roles == "USER") {
            return $next($request);
        } else {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Must be Login as admin');
        }

        // if (Auth::user() && Auth::user()->roles == "USER" ) {
        //     return $next($request);
        // } else {
        //     Auth::logout();
        //     return redirect()->route('login')->with('error', 'Must be Login as admin');
        // }
    }
}
