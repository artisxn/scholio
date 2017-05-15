<?php

namespace App\Http\Middleware\Users\Teacher;

use Closure;

class IsTeacher
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
        if (auth()->user()->role == 'teacher') {
            return $next($request);
        }

        abort('403');
    }
}
