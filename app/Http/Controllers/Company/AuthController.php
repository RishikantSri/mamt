<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('backend.company.auth.login');
    }

    public function loginAuthenticate(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/company/dashboard');
        } else {
            session()->flash('error', 'Either Email/Password is incorrect');
            return back()->withInput($request->only('email'));
        }
    }

    public function logout()
    {
        Auth::guard('company')->logout();
        return redirect()->route('company.login');
    }

    public function dashboard()
    {

        return view('backend.company.dashboard');
    }
}
