<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if ($request->user()->hasRole($roles)) {
            return $next($request);
        }
        return redirect(route('denies'));
    }
}
