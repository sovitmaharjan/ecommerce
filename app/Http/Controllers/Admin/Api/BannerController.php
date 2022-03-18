<?php

namespace App\Http\Controllers\Admin\Api;

use App\Contracts\BannerInterface;
use App\Custom\ImageService;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BannerRequest;
use App\Http\Resources\BannerResource;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $interface, $response;

    public function __construct(BannerInterface $interface, ResponseService $response, ImageService $imageService)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        $banner = Banner::with('image')->get();
        return $banner;
    }

    public function create()
    {
        //
    }

    public function store(BannerRequest $request)
    {
        try {
            $result = $this->interface->store($request);
            $data = new BannerResource($result);
            return $this->response->responseSuccess([
                'banner' => $data,
            ], '', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function show($id)
    {
        $banner = Banner::where('id', $id)->with('image')->first();
        if ($banner == '') {
            return 'No data';
        }
        return $banner;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::where('id', $id)->first();
        if ($banner == '') {
            return 'No data';
        }
        $data = $request->except('image', '_method');
        try {
            $result = Banner::where('id', $id)->update($data);
            if ($file = $request->image) {
                $this->imageService->upload($banner, $file, $oldFile = $banner->image->path);
            }
            $result =  Banner::where('id', $id)->with('image')->first();
            return $result;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function destroy($id)
    {
        $banner = Banner::where('id', $id)->first();
        if ($banner == '') {
            return 'No data';
        }
        try {
            $result = $banner->delete();
            if ($banner) {
                $this->imageService->delete($banner, $banner->image->path ?? null);
            }
            return 'success';
        } catch (\Exception $e) {
            return $e;
        }
    }
}
