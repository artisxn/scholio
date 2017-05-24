<?php

namespace App\Http\Middleware\School;

use Closure;

class SeeStudentProfile
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
        $user = $request->route()->parameters['user'];
        if ($user->isConnectedWithSchool(auth()->user()->info)) {
            return $next($request);
        }
        abort(403);
    }
}
