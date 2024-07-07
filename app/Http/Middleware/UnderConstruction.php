<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnderConstruction
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    // FIXME: Fix this line
    // if ((\App\Helpers\getSetting('under') == 'yes') & !auth()->check()) {
    //   return response()->view('website.under');
    // } else {
    //   return $next($request);
    // }

    return $next($request);
  }
}
