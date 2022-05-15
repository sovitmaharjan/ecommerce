<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

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
            if (!Auth::user()->hasRole('customer')) {
                return redirect()->back()->with("error", "Role mismatch");
            }
            return redirect()->route('customer.dashboard');
        }
        return redirect()->back()->with("error", "Email, password didn't match");
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        if($user){
            $role = Role::where('name', User::CUSTOMER)->first();
            $user->assignRole([$role->id]);
            return redirect()->back()->with("success", "Account created. Confirm you account on you email");
        }
        return redirect()->back()->with("error", "Something went wrong");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('customer.login');
    }
}
