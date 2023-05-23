<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CompanyAuthenticate extends Middleware
{
    //Step 7: Created DoctorAuthenticate middleware for doctor
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('company.login');
        }
    }

    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('company')->check()) {
            return $this->auth->shouldUse('company');
        }

        $this->unauthenticated($request, ['company']);
    }
}
