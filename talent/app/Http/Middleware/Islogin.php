<?php

namespace App\Http\Middleware;

use Closure;

class Islogin
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
        if (isset(session("loginUser")['role'])) {
            return $next($request);
        } else {
            return redirect("/loginAdmin");
        }
    }
}
