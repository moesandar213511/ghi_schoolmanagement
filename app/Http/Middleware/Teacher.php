<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Teacher
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
        if(Auth::check()){
            if(Auth::user()->role == "teacher"){
                return $next($request);
            }else{
                return redirect()->back();
            }
        }else{
                return redirect()->back();
        }   
    }
}
