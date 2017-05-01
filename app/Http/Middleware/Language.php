<?php
namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;

class Language
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
        // dd('lang');
        if ($request->lang) {
            $locale = $request->lang;
            session()->put('lang', $locale);
        } else {
            // dd(session/()->get('lang'));
            $locale = session()->get('lang');
            $locale = 'el';
        }

        app()->setLocale($locale);
        return $next($request);
    }

}
