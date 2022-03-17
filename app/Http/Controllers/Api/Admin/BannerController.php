<?php

namespace App\Http\Controllers\Api\Admin;

use App\Custom\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $banner = Banner::with('image')->get();
        return $banner;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('image');
        try {
            $result = Banner::create($data);
            if ($file = $request->image) {
                $this->imageService->upload($result, $file);
            }
            return $result;
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::where('id', $id)->with('image')->first();
        if ($banner == '') {
            return 'No data';
        }
        return $banner;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::where('id', $id)->first();
        if ($banner == '') {
            return 'No data';
        }
        try {
            $result = $banner->delete();
            if ($banner) {
                $this->imageService->delete($banner);
            }
            return 'success';
        } catch (\Exception $e) {
            return $e;
        }
    }
}
