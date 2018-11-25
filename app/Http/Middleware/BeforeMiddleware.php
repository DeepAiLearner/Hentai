<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    /*
     * 传参：docs about parameters
     * https://lumen.laravel.com/docs/5.7/middleware#middleware-parameters
     */
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->get('age') < 18) {
            return 'you bad bad';
        }

        return $next($request);
    }
}
