<?php

namespace App\Http\Middleware;

use Closure;

//? membuat class AfterMiddleware
class AfterMiddleware {
    public function handle (Request $request) {
        $response = $next($request);

        return $response;
    }
}