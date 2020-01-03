<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

class Locale
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
        $locale = $request->session()->get('locale');
        if ($locale)
            App::setLocale($locale);
        return $next($request);
    }
}
