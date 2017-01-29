<?php

namespace App\Http\Middleware;

use Closure;

class VerifySchoolAdmin
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
        if (session()->get('school.user.name') == null) {
            return back();
        }

        if (auth()->check()) {
            return back();
        }

        return $next($request);
    }
}
