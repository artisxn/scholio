<?php

namespace App\Http\Middleware\Users\Student;

use Closure;

class IsStudent
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
        if (auth()->user()->role == 'student') {
            return $next($request);
        }

        abort('403');
    }
}
