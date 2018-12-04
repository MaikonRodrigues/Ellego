<?php

namespace Ellego\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if(!auth()->check())
            return redirect('login');

        $user = \Auth::user();


        if ($request->user()->authorizeRoles($roles)) {
            return $next($request);
        }
        echo 'olo';

        return redirect('login');
    }
}
