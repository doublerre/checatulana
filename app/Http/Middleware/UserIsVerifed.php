<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserIsVerifed
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
        if(Auth::guard()->check() && auth()->user()->activated == 0)
        {
            return response(view('errors.banned'));
        }else{
            return $next($request);
        }
    }
}
