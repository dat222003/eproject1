<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth_admin
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
        if (!session()->has('admin')){
            return redirect()->route('admin.pre_login')->with('alert', 'You have to logged in first');
        }
        return $next($request);
    }
}
