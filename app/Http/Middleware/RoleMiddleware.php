<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // TODO error flash message

        if (!$request->user()) {
            return redirect('/');
        }

        if ($request->user()->userable_type !== $role) {
            return redirect('/');
        }

        return $next($request);
    }
}
