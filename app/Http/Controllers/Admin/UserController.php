<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\UserInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $user_interface;

    public function __construct(UserInterface $user_interface)
    {
        $this->user_interface = $user_interface;
    }

    public function index()
    {
        $user = $this->user_interface->index();
        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->user_interface->store($request);
            DB::commit();
            return redirect()->route('user.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $user = $this->user_interface->find($id);
    //         return redirect()->route('user.show', compact('user'));
    //     } catch (Exception $e) {
    //         return $e;
    //     }
    // }

    public function edit($id)
    {
        try {
            $user = $this->user_interface->find($id);
            return view('admin.user.edit', compact('user'));
        } catch (Exception $e) {
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    public function update(UserRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $user = $this->user_interface->update($request, $id);
            DB::commit();
            return $user
                ? redirect()->route('user.index')->with('success', 'Update successful')
                : redirect()->route('user.index')->with('error', 'Update fail');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $user = $this->user_interface->destroy($id);
            return $user
                ? redirect()->route('user.index')->with('success', 'Delete successful')
                : redirect()->route('user.index')->with('info', 'Detail fail');
        } catch (Exception $e) {
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }
}
