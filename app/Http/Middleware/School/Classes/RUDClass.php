<?php

namespace App\Http\Middleware\School\Classes;

use Closure;

class RUDClass
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
        // if(auth()->user()->role == 'school' && auth()->user)
        return $next($request);
    }
}
