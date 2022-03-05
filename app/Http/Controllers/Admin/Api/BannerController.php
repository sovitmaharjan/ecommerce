<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return $banner->toArray();
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
        $slug = Str::slug($data['title']);
        if (Banner::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        if ($file = $request->image) {
            $filename = rand() . time() . '.' . $file->extension();
            $path = $path = 'uploads/' . Carbon::now()->format('Y') . '/' . Carbon::now()->format('M') . '/';
            $file->move(storage_path($path), $filename);
            $data['image'] = $filename;
        } else {
            $data['image'] = '';
        }
        try {
            $result = Banner::create($data);
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
        $banner = Banner::where('id', $id)->first();
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
    public function update(UpdateBannerRequest $request, $id)
    {
        $banner = Banner::where('id', $id)->first();
        if ($banner == '') {
            return 'No data';
        }
        $data = $request->except('image', '_method');
        $slug = Str::slug($data['title']);
        if (Banner::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        if ($file = $request->image) {
            $filename = rand() . time() . '.' . $file->extension();
            $file->move(storage_path('uploads/'), $filename);
            $data['image'] = $filename;
        } else {
            $data['image'] = '';
        }
        try {
            $result = Banner::where('id', $id)->update($data);
            if ($banner->image) {
                $file_path = storage_path('uploads/' . $banner->image);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
            $result =  Banner::where('id', $id)->first();
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
            if ($banner->image) {
                $file_path = storage_path('uploads/' . $banner->image);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
            return 'success';
        } catch (\Exception $e) {
            return $e;
        }
    }
}
