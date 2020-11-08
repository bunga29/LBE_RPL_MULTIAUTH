<?php

namespace App\Http\Middleware;

use Closure;

class OnlyOuser
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
        if($request->user()->role != 'bukan_admin'){
            return redirect()->route('salahrole');
        }
        return $next($request);
    }
}
