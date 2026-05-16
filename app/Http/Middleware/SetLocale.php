<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = null;

        if ($request->has('lang')) {
            $lang = $request->query('lang');
        } elseif ($request->route('locale')) {
            $lang = $request->route('locale');
        }

        if ($lang) {
            $lang = $lang === 'fr' ? 'fr' : 'en';
            session(['locale' => $lang]);
        }

        app()->setLocale(session('locale', config('app.locale')));

        return $next($request);
    }
}
