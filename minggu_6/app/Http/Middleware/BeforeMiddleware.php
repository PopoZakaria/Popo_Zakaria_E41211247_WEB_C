<?php

namespace App\Http\Middleware;

use Closure;

//? membuat class beforemiddleware
class BeforeMiddleware
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}