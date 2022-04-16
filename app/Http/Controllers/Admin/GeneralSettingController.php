<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\GeneralSettingInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralSettingRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class GeneralSettingController extends Controller
{
    protected $general_setting_interface, $response;

    public function __construct(GeneralSettingInterface $general_setting_interface, ResponseService $response)
    {
        $this->general_setting_interface = $general_setting_interface;
        $this->response = $response;
    }
    
    public function index()
    {
        $general_setting = $this->general_setting_interface->index();
        if($general_setting != null){
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
