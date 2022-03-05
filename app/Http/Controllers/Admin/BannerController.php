<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Admin\Banner;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
        dd($banner);
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
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
            dd('success');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        dd($banner);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        dd('here');
        dd($banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Admin\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
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
            $result = Banner::where('id', $banner->id)->update($data);
            if ($banner->image) {
                $file_path = storage_path('uploads/' . $banner->image);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
            dd('success');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        try {
            $result = $banner->delete();
            if ($banner->image) {
                $file_path = storage_path('uploads/' . $banner->image);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
            dd('success');
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
