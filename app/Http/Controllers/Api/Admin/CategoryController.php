<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
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
        return CategoryResource::collection($category);
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
        $data = $request->all();
        $slug = Str::slug($data['title']);
        if (Category::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        try {
            $result = Category::create($data);
            return new CategoryResource($result);

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
        return new CategoryResource($category);
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
        $data = $request->except('_method');
        $slug = Str::slug($data['title']);
        if (Category::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        try {
            $result = Category::where('id', $id)->update($data);
            $result =  Category::where('id', $id)->first();
            return new CategoryResource($result);
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
            return 'success';
        } catch (\Exception $e) {
            return $e;
        }
    }
}
