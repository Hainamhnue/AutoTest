<?php

namespace App\Http\Middleware;
use Closure;
use Auth;

class checkLogin
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
        if (Auth::check())
        {
            //if (Auth::user()->level)
            //{
              return $next($request);
            //}
//            else
//            {
//                Auth::logout();
//                return redirect()->route('login');
//          }
        }
        else{
            return redirect()->route('login');
        }

    }
}
