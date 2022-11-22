<?php

namespace App\Http\Middleware;

use Closure;

class Role
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

        if(auth()->user()->role == "Lavoratore" || auth()->user()->role == "Azienda" || auth()->user()->role == "Impresa"){
            return $next($request);
        } 
        else {
            return redirect('home')->with('error',"You don't have the pesmissions to access here.");
        }
        
    }
}
