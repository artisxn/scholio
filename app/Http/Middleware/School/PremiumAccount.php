<?php

namespace App\Http\Middleware\School;

use Closure;

class PremiumAccount
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
            if(auth()->user()->subscription->plan_id == 2){
                return $next($request);
            }
        }
        abort('403');
    }
}
