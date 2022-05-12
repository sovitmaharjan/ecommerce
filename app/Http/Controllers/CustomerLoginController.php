<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerLoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if (!Auth::user()->hasRole('customer')) {
            //     return redirect()->back()->with("error", "Email, password didn't match");
            // }
            return redirect()->route('customer.dashboard');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('customer.login');
    }
}
