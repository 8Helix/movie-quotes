<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocalLanguage
{
	/**
	 * Handle an incoming request.
	 */
	public function handle(Request $request, Closure $next)
	{
		$lang = session('lang', 'en');
		App::setLocale($lang);
		return $next($request);
	}
}
