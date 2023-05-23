<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyRedirectIfAuthenticated
{
    //Step 8: Created DoctorRedirectIfAuthenticated middleware for doctor
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {


        if (Auth::guard('company')->check()) {
            return redirect()->route('company.dashboard');
        }


        return $next($request);
    }
}
