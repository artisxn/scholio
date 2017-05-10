<?php

namespace App\Http\Middleware\School;

use Closure;

class IsSchool
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
        if (auth()->user()->role == 'school') {
            return $next($request);
        }

        abort('403');
    }
}
