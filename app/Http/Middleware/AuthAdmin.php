<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->utype === 'ADM') {
                return $next($request);
            }
            return redirect()->route('user.dashboard'); // Redirect to user dashboard if not admin
        } else {
            Session::flush();
            return redirect()->route('login');
        }
    }
}