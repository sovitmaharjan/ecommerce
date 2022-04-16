<?php

namespace App\Repositories;

use App\Contracts\AttributeInterface;
use App\Custom\ImageService;
use App\Models\Attribute;
use Exception;

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
        if (!$result) {
            throw new Exception('No Data');
        }
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
        $attribute = Attribute::find($id);
        if (!$attribute) {
            throw new Exception('No Data');
        }
        $data = $request->except('_method', '_token');
        $result = $attribute->update($data);
        return $result;
    }

    public function destroy($id)
    {
        $attribute = Attribute::find($id);
        if (!$attribute) {
            throw new Exception('No Data');
        }
        $result = $attribute->delete();
        return $result;
    }
}
