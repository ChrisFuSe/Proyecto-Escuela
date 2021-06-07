<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Maestra
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->tipo == '3'){
            return $next($request);
        }else{
            return redirect('login');
        }
    }
}
