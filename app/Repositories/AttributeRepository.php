<?php

namespace App\Repositories;

use App\Contracts\AttributeInterface;
use App\Custom\ImageService;
use App\Models\Attribute;

class AttributeRepository implements AttributeInterface
{
    public function index()
    {
        $result = Attribute::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = Attribute::where('id', $id)->first();
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('_token');
        $result = Attribute::create($data);
        return $result;
    }

    public function update($request, $id)
    {
        $banner = Attribute::find($id);
        if ($banner) {
            $data = $request->except('_method', '_token');
            $result = $banner->update($data);
        }
        return $result ?? 0;
    }

    public function destroy($id)
    {
        $banner = Attribute::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
        }
        return $result ?? 0;
    }
}
