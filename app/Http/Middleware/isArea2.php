<?php

namespace App\Http\Middleware;

use Closure;

class isArea2
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
      if(auth()->user()->role == null && auth()->user()->area == 2){
         return $next($request);
     }

     return abort(401);
    }
}
