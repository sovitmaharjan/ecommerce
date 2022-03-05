<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return $category->toArray();
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
        if (Category::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        if ($file = $request->image) {
            $filename = rand() . time() . '.' . $file->extension();
            $path = $path = 'uploads/' . Carbon::now()->format('Y') . '/' . Carbon::now()->format('M') . '/';
            $file->move(storage_path($path), $filename);
            $data['image'] = $path . $filename;
        }
        try {
            $result = Category::create($data);
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
        $category = Category::where('id', $id)->first();
        if ($category == '') {
            return 'No data';
        }
        return $category;
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
        $category = Category::where('id', $id)->first();
        if ($category == '') {
            return 'No data';
        }
        $data = $request->except('image', '_method');
        $slug = Str::slug($data['title']);
        if (Category::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        if ($file = $request->image) {
            $filename = rand() . time() . '.' . $file->extension();
            $path = $path = 'uploads/' . Carbon::now()->format('Y') . '/' . Carbon::now()->format('M') . '/';
            $file->move(storage_path($path), $filename);
            $data['image'] = $path . $filename;
            if ($category->image) {
                $file_path = storage_path($category->image);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
        }
        try {
            $result = Category::where('id', $id)->update($data);
            $result =  Category::where('id', $id)->first();
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
        $category = Category::where('id', $id)->first();
        if ($category == '') {
            return 'No data';
        }
        try {
            $result = $category->delete();
            if ($category->image) {
                $file_path = storage_path($category->image);
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
