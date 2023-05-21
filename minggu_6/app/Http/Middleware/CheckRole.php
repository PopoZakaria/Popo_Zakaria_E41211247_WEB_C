<?php

namespace App\Http\Middleware;
use Closure;

//? membuat class CheckRole
class CheckRole {
    public function handle($request, Closure $next, $role) {
        if (! $request->user()->hasRole($role)) {
            // Redirect...
        }
        return $next($request);
    }

}