<?php

namespace App\Repositories;

use App\Contracts\GeneralSettingInterface;
use App\Custom\ImageService;
use App\Models\GeneralSetting;
use Exception;

class GeneralSettingRepository implements GeneralSettingInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $result = GeneralSetting::first();
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('_token', 'logo', 'favicon');
        $result = GeneralSetting::create($data);
        if ($file = $request->logo) {
            $this->image->upload($result, $file, null, 'logo');
        }
        if ($file = $request->favicon) {
            $this->image->upload($result, $file, null, 'favicon');
        }
        return $result;
    }

    public function update($request, $id)
    {
        $general_setting = GeneralSetting::find($id);
        if (!$general_setting) {
            throw new Exception('No Data');
        }
        $data = $request->except('_method', '_token', 'logo', 'favicon');
        $result = $general_setting->update($data);
        if ($file = $request->logo) {
            $this->image->upload($general_setting, $file, $general_setting->getPath('logo') ?? null, 'logo');
        }
        if ($file = $request->favicon) {
            $this->image->upload($general_setting, $file, $general_setting->getPath('favicon') ?? null, 'favicon');
        }
        return $result;
    }
}
