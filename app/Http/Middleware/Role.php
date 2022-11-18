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

        if(auth()->user()->role == "Lavoratore"){
            return $next($request);
        } 
        else {
            return redirect('home')->with('error',"You don't have the pesmissions to access here.");
        }
        if(auth()->user()->role == "Azienda"){
            return $next($request);
        } else {
        return redirect('home')->with('error',"You don't have the pesmissions to access here.");
        }
        if(auth()->user()->role == "Istituto"){
            return $next($request);
        } else {
        return redirect('home')->with('error',"You don't have the pesmissions to access here.");
        }
        
    }
}