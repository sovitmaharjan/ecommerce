<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\UserInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $interface, $response;

    public function __construct(UserInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $user = $this->interface->index();
            return view('admin.user.index', compact('user'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('user.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $user = $this->interface->find($id);
    //         return redirect()->route('user.show', compact('user'));
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function edit($id)
    {
        try {
            $user = $this->interface->find($id);
            return view('admin.user.edit', compact('user'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(UserRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $user = $this->interface->update($request, $id);
            DB::commit();
            return $user
                ? redirect()->route('user.index')->with('success', 'Update successful')
                : redirect()->route('user.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $user = $this->interface->destroy($id);
            return $user
                ? redirect()->route('user.index')->with('success', 'Delete successful')
                : redirect()->route('user.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
