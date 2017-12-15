<?php

namespace App\Http\Middleware;

use Closure;
use App\Key;

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
        $soon = env('COMING_SOON', false);
        $keys = Key::find(1);

        // if (!$soon) {
        //     return $next($request);
        // }


        if (!$keys->soon) {
            return $next($request);
        }

        $server = $request->server->all();
        $agent = $server['HTTP_USER_AGENT'];
        $up = strtoupper($agent);

        if (strpos($up, 'MESSENGER') !== false) {
            return $next($request);
        }

        if($url == request()->is('1q1q*')){
            return $next($request);
        }

        if ($url == url('/scholio/ready')) {
            return $next($request);
        }

        if ($url == url('/api/bot/scholarship/search') || $url == url('/api/bot/school/search')) {
            return $next($request);
        }

        if ($url == url('/api/bot/scholarship/custom') || $url == url('/api/bot/school/custom')) {
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
