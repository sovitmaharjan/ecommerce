<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return $brand->toArray();
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
        if (Brand::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        if ($file = $request->image) {
            $filename = rand() . time() . '.' . $file->extension();
            $path = $path = 'uploads/' . Carbon::now()->format('Y') . '/' . Carbon::now()->format('M') . '/';
            $file->move(storage_path($path), $filename);
            $data['image'] = $path. $filename;
        }
        try {
            $result = Brand::create($data);
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
        $brand = Brand::where('id', $id)->first();
        if ($brand == '') {
            return 'No data';
        }
        return $brand;
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
        $brand = Brand::where('id', $id)->first();
        if ($brand == '') {
            return 'No data';
        }
        $data = $request->except('image', '_method');
        $slug = Str::slug($data['title']);
        if (Brand::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        if ($file = $request->image) {
            $filename = rand() . time() . '.' . $file->extension();
            $path = $path = 'uploads/' . Carbon::now()->format('Y') . '/' . Carbon::now()->format('M') . '/';
            $file->move(storage_path($path), $filename);
            $data['image'] = $path. $filename;
        }
        if ($brand->image) {
            $file_path = storage_path($brand->image);
            if (File::exists($file_path)) {
                unlink($file_path);
            }
        }
        try {
            $result = Brand::where('id', $id)->update($data);
            if ($brand->image) {
                $file_path = storage_path($brand->image);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
            $result =  Brand::where('id', $id)->first();
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
        $brand = Brand::where('id', $id)->first();
        if ($brand == '') {
            return 'No data';
        }
        try {
            $result = $brand->delete();
            if ($brand->image) {
                $file_path = storage_path($brand->image);
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
