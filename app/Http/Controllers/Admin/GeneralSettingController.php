<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\GeneralSettingInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralSettingRequest;
use Illuminate\Support\Facades\DB;

class GeneralSettingController extends Controller
{
    protected $interface, $response;

    public function __construct(GeneralSettingInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }
    
    public function index()
    {
        try {
            $general_setting = $this->interface->index();
            if($general_setting != null){
                return view('admin.general-setting.edit', compact('general_setting'));
            }
            return view('admin.general-setting.create');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.general-setting.create');
    }

    public function store(GeneralSettingRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('general-setting.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function update(GeneralSettingRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $general_setting = $this->interface->update($request, $id);
            DB::commit();
            return $general_setting
                ? redirect()->route('general-setting.index')->with('success', 'Update successful')
                : redirect()->route('general-setting.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
}
