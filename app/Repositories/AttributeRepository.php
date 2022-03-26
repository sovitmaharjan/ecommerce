<?php

namespace App\Repositories;

use App\Contracts\AttributeInterface;
use App\Models\Attribute;

class AttributeRepository implements AttributeInterface
{
    public function index()
    {
        $banner = Attribute::all();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function show($id)
    {
        $banner = Attribute::where('id', $id)->first();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function store($request)
    {
        $data = $request->all();
        $banner = Attribute::create($data);
        return $banner;
    }

    public function update($request, $id)
    {
        $banner = Attribute::find($id);
        if ($banner) {
            $data = $request->except('_method');
            $banner->update($data);
            return $banner->refresh();
        }
        return null;
    }

    public function destroy($id)
    {
        $banner = Attribute::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            return $result;
        }
        return null;
    }
}
