<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.superadmin.auth.login');
    }

    public function loginAuthenticate(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/superadmin/dashboard');
        }else {
            session()->flash('error', 'Either Email/Password is incorrect');
            return back()->withInput($request->only('email'));
        }
    }

    public function logout()
    {
        Auth::guard('superadmin')->logout();
        return redirect()->route('superadmin.login');
    }

    public function dashboard() {

             return view('backend.superadmin.partials.dashboard');
    }
}
