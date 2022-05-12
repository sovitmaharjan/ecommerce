<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index(Request $request)
    {
        // dd(Auth::user()->can('role-create'));
        $role = Role::orderBy('id', 'DESC')->get();
        return view('admin.role.index', compact('role'));
    }

    public function create()
    {
        $permission = Permission::all();
        return view('admin.role.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:role,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('role.index')
            ->with('success', 'Role created successfully');
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();

        return view('admin.role.show', compact('role', 'rolePermissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);

        // make everything accending with one query pachi garne lai 
        $permission['Role'] = Permission::where('name',  'like', 'role%')->orderBy('id', 'ASC')->get();
        $permission['User'] = Permission::where('name',  'like', 'user%')->orderBy('id', 'ASC')->get();
        $permission['Account Request'] = Permission::where('name',  'like', 'account-request%')->orderBy('id', 'ASC')->get();
        $permission['Category'] = Permission::where('name',  'like', 'category%')->orderBy('id', 'ASC')->get();
        $permission['Attribute'] = Permission::where('name',  'like', 'attribute%')->orderBy('id', 'ASC')->get();
        $permission['Brand'] = Permission::where('name',  'like', 'brand%')->orderBy('id', 'ASC')->get();
        $permission['Product'] = Permission::where('name',  'like', 'product%')->orderBy('id', 'ASC')->get();
        $permission['Order'] = Permission::where('name',  'like', 'order%')->orderBy('id', 'ASC')->get();
        $permission['User Profile'] = Permission::where('name',  'like', 'profile%')->orderBy('id', 'ASC')->get();
        $permission['Banner'] = Permission::where('name',  'like', 'banner%')->orderBy('id', 'ASC')->get();
        $permission['General Setting'] = Permission::where('name',  'like', 'general-setting%')->orderBy('id', 'ASC')->get();
        $permission['Payment'] = Permission::where('name',  'like', 'payment%')->orderBy('id', 'ASC')->get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id')
            ->all();
        return view('admin.role.edit', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('role.edit', $role->id)
            ->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        DB::table("role")->where('id', $id)->delete();
        return redirect()->route('role.index')
            ->with('success', 'Role deleted successfully');
    }
}
