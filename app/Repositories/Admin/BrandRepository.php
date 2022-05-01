<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\BrandInterface;
use App\Custom\ImageService;
use App\Models\Brand;
use Exception;

class BrandRepository implements BrandInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $result = Brand::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = Brand::where('id', $id)->first();
        if (!$result) {
            throw new Exception('No Data');
        }
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('image', '_token');
        $result = Brand::create($data);
        if ($file = $request->image) {
            $this->image->upload($result, $file);
        }
        return $result;
    }

    public function update($request, $id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            throw new Exception('No Data');
        }
        $data = $request->except('image', '_method', '_token');
        $result = $brand->update($data);
        if ($file = $request->image) {
            $this->image->upload($brand, $file, $brand->image->path ?? null);
        }
        return $result;
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            throw new Exception('No Data');
        }
        $result = $brand->delete();
        $this->image->delete($brand, $brand->image->path ?? null);
        return $result;
    }
}
