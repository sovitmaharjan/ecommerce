<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\AccountRequestInterface;
use App\Models\AccountRequest;
use App\Models\User;
use App\Models\UserProfile;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AccountRequestRepository implements AccountRequestInterface
{
    public function index()
    {
        $result = AccountRequest::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = AccountRequest::where('id', $id)->first();
        if (!$result) {
            throw new Exception('No Data');
        }
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('_token');
        $result = AccountRequest::create($data);
        return $result;
    }

    public function createAccount($id)
    {
        $account_request = AccountRequest::find($id);
        if (!$account_request) {
            throw new Exception('No Data');
        }
        $user = User::create([
            'name' => $account_request->name,
            'email' => $account_request->email,
            'password' => Str::random(64)
        ]);
        
        $role = Role::where('name', User::VENDOR)->first();
        $user->assignRole([$role->id]);

        DB::table('password_resets')->where(['email' => $account_request->email])->delete();
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $account_request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $subject = 'New Account';
        $to_name = $account_request->name;
        $to_email = $account_request->email;
        $data = [
            'name' => $to_name,
            "body" => 'Set a password for your account from this link: ' . route("password.reset", $token)
        ];
        $result = Mail::send('mail-template', $data, function ($message) use ($to_name, $to_email, $subject) {
            $message->to($to_email, $to_name)->subject($subject);
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        $account_request->delete();
        return $result;
    }

    public function destroy($id)
    {
        $account_request = AccountRequest::find($id);
        if (!$account_request) {
            throw new Exception('No Data');
        }
        $result = $account_request->delete();
        return $result;
    }
}
