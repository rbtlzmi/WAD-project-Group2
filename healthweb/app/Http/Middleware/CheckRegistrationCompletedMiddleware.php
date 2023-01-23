<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRegistrationCompletedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null(auth()->user()->identification_id)
            && is_null(auth()->user()->phone_no)
            && is_null(auth()->user()->address)
            && is_null(auth()->user()->role_id)) {
                return redirect()->route('register-step2.create');
            }

        return $next($request);
    }
}
