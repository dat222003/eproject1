<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Already_logged_in
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
        if (auth()->user()){
            return redirect()->route('admin.home')->with('status', 'You have already logged in');
        }
        return $next($request);
    }
}
