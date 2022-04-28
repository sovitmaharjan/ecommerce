<?php

namespace App\Repositories;

use App\Contracts\HomeInterface;
use App\Custom\ImageService;
use App\Models\Banner;
use Exception;

class HomeRepository implements HomeInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function banner($type)
    {
        $result = Banner::where('type', $type)->orderBy('created_at', 'DESC')->get();
        return $result;
    }

    // public function find($id)
    // {
    //     $result = Banner::where('id', $id)->first();
    //     if (!$result) {
    //         throw new Exception('No Data');
    //     }
    //     return $result;
    // }

    // public function store($request)
    // {
    //     $data = $request->except('image', '_token');
    //     $result = Banner::create($data);
    //     if ($file = $request->image) {
    //         $this->image->upload($result, $file);
    //     }
    //     return $result;
    // }

    // public function update($request, $id)
    // {
    //     $banner = Banner::find($id);
    //     if (!$banner) {
    //         throw new Exception('No Data');
    //     }
    //     $data = $request->except('image', '_method', '_token');
    //     $result = $banner->update($data);
    //     if ($file = $request->image) {
    //         $this->image->upload($banner, $file, $banner->image->path ?? null);
    //     }
    //     return $result;
    // }

    // public function destroy($id)
    // {
    //     $banner = Banner::find($id);
    //     if (!$banner) {
    //         throw new Exception('No Data');
    //     }
    //     $result = $banner->delete();
    //     $this->image->delete($banner, $banner->image->path ?? null);
    //     return $result;
    // }
}
