<?php

namespace App\Http\Middleware;

use Closure;


class LoginMiddleware
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

		set_sessinfo($user) ;
        return $next($request);

    }
}