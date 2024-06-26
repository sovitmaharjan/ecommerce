<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\GeneralSettingInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralSettingRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class GeneralSettingController extends Controller
{
    protected $general_setting_interface;

    public function __construct(GeneralSettingInterface $general_setting_interface)
    {
        $this->middleware('permission:general-setting-list|general-setting-create|general-setting-edit|general-setting-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:general-setting-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:general-setting-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:general-setting-delete', ['only' => ['destroy']]);
        $this->general_setting_interface = $general_setting_interface;
    }

    public function index()
    {
        $general_setting = $this->general_setting_interface->index();
        if ($general_setting != null) {
            return view('admin.general-setting.edit', compact('general_setting'));
        }
        return view('admin.general-setting.create');
    }

    public function create()
    {
        return view('admin.general-setting.create');
    }

    public function store(GeneralSettingRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->general_setting_interface->store($request);
            DB::commit();
            return redirect()->route('general-setting.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('general-setting.index')->with('error', $e->getMessage());
        }
    }

    public function update(GeneralSettingRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->general_setting_interface->update($request, $id);
            DB::commit();
            return redirect()->route('general-setting.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('general-setting.index')->with('error', $e->getMessage());
        }
    }
}
