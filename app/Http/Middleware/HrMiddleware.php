<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class HrMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->role_id==1)
        {
            return $next($request);
        }
    }
}
