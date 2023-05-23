<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeRedirectIfAuthenticated
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


        if (Auth::guard('employee')->check()) {
            return redirect()->route('employee.dashboard');
        }


        return $next($request);
    }
}
