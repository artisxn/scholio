<?php

namespace App\Http\Middleware\Users\Parent;

use Closure;

class IsParent
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
        if (auth()->user->role == 'parent') {
            return $next($request);
        }

        abort('403');
    }
}
