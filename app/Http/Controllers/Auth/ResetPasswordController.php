<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);
        $updatePassword = DB::table('password_resets')
            ->where([
                'token' => $request->token
            ])->first();

        if (!$updatePassword) {
            return back()->with('error', 'Invalid token!');
        }
        User::where('email', $updatePassword->email)->update([
            'password' => Hash::make($request->password),
            'email_verified_at' => Carbon::now(),
        ]);

        DB::table('password_resets')->where(['email' => $updatePassword->email])->delete();

        return redirect('/login')->with('success', 'Your new password has been set!');
    }
}
