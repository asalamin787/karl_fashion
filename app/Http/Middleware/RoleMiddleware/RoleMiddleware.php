<?php

namespace App\Http\Middleware\RoleMiddleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {   
        if(auth()->check() && auth()->user()->role->name == $role){
            return  $next($request);
        }
        else{
            abort(404);
        }
        // return $next($request);
    }
}