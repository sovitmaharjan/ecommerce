<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\UserProfileInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    protected $user_profile_interface;

    public function __construct(UserProfileInterface $user_profile_interface)
    {
        $this->user_profile_interface = $user_profile_interface;
    }

    public function index()
    {
        $user_profile = $this->user_profile_interface->index();
        return view('admin.user-profile.index', compact('user_profile'));
    }

    public function create()
    {
        return view('admin.user-profile.create');
    }

    public function store(UserProfileRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->user_profile_interface->store($request);
            DB::commit();
            return redirect()->route('user-profile.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('user-profile.index')->with('error', $e->getMessage());
        }
    }

    public function edit()
    {
        return view('admin.user-profile.edit');
    }

    // public function destroy($id)
    // {
    //     try {
    //         $this->user_profile_interface->destroy($id);
    //         return redirect()->route('user-profile.index')->with('success', 'Delete successful');
    //     } catch (Exception $e) {
    //         return redirect()->route('user-profile.index')->with('error', $e->getMessage());
    //     }
    // }
}
