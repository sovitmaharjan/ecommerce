<?php

namespace App\Repositories;

use App\Contracts\BrandInterface;
use App\Custom\ImageService;
use App\Models\Brand;

class BrandRepository implements BrandInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $banner = Brand::all();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function show($id)
    {
        $banner = Brand::where('id', $id)->first();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function store($request)
    {
        $data = $request->except('image');
        $banner = Brand::create($data);
        if ($file = $request->image) {
            $this->image->upload($banner, $file);
        }
        return $banner;
    }

    public function update($request, $id)
    {
        $banner = Brand::find($id);
        if ($banner) {
            $data = $request->except('image', '_method');
            $banner->update($data);
            if ($file = $request->image) {
                $this->image->upload($banner, $file, $banner->image->path ?? null);
            }
            return $banner->refresh();
        }
        return null;
    }

    public function destroy($id)
    {
        $banner = Brand::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            $this->image->delete($banner, $banner->image->path ?? null);
            return $result;
        }
        return null;
    }
}
