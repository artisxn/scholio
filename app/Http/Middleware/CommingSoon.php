<?php

namespace App\Http\Middleware;

use Closure;

class CommingSoon
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
        $url = request()->url();
        $soon = config('app.soon');

        if (!$soon) {
            return $next($request);
        }

        if ($url == url('/api/bot/school')) {
            return $next($request);
        }

        if ($url == url('/lang/en') || $url == url('/lang/el')) {
            return $next($request);
        }

        if (request()->cookie('pass')) {
            return $next($request);
        }

        if ($url == url('/coming')) {
            return $next($request);
        }

        if ($url == url('/full')) {
            return $next($request);
        }
        return redirect('/coming');
    }
}
