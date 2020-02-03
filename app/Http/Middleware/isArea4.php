<?php

namespace App\Http\Middleware;

use Closure;

class isArea4
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
      if(auth()->user()->role == null && auth()->user()->area == 4){
         return $next($request);
     }

     return abort(401);
    }
}
