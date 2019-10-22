<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validate form data
        $this->validate($request, [
           'email' => 'required|string',
            'password' => 'required|string',
        ]);

        //attempt to login user
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('/products'));
        }

        //if unsucessful return to form with data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
