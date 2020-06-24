<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckUserSession
{

  public function handle($request, Closure $next)
  {
    if (Session::has('name')) {
      return $next($request);
    }

    return redirect()->back();
  }
}
