<?php

namespace App\Http\Middleware;

use Closure;

class Publik
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
        if (auth()->check() && $request->user()->level == 'user'){
            return $next($request);
        }
        return "hi";
        // return new Response(view('unauthorized')->with('level', 'user'));

        // return redirect()->guest('welcome');
    }
}
