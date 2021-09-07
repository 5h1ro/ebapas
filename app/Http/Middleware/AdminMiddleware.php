<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        $role = Auth::user()->role;
        $uid  = Auth::user()->uid;
        $value = $request->cookie('ebima');
        if ($role != "admin" && $uid != $value) {
            Auth::logout();
            return redirect()->route('error')->with('alert', 'Device tidak terdaftar');
        }
        return $next($request);
    }
}
