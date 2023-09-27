<?php

namespace App\Http\Middleware;

use Closure;

class Trainer
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
        if (Auth::guard('trainer')->check()) {
        return $next($request); 
     }  redirect('/trainer/login');
     
  
    }
}
