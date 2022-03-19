<?php

namespace App\Repositories;

use App\Contracts\BannerInterface;
use App\Custom\ImageService;
use App\Models\Admin\Banner;

class BannerRepository implements BannerInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $banner = Banner::all();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function show($id)
    {
        $banner = Banner::where('id', $id)->first();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function store($request)
    {
        $data = $request->except('image');
        $banner = Banner::create($data);
        if ($file = $request->image) {
            $this->image->upload($banner, $file);
        }
        return $banner;
    }

    public function update($request, $id)
    {
        $banner = Banner::find($id);
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
        $banner = Banner::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            $this->image->delete($banner, $banner->image->path ?? null);
            return $result;
        }
        return null;
    }
}
