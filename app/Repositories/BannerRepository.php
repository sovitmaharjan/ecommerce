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

    public function findAll()
    {
    }

    public function find()
    {
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

    public function update()
    {
    }

    public function destroy()
    {
    }
}
