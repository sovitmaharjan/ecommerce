<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return ProductResource::collection($product);
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
        if (Product::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        $data['user_id'] = Auth::user()->id;
        try {
            $result = Product::create($data);
            return new ProductResource($result);

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
        $product = Product::where('id', $id)->first();
        if ($product == '') {
            return 'No data';
        }
        return new ProductResource($product);
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
        $product = Product::where('id', $id)->first();
        if ($product == '') {
            return 'No data';
        }
        $data = $request->except('_method');
        $slug = Str::slug($data['title']);
        if (Product::where('slug', $slug)->first()) {
            $slug = $slug . '-' . rand() . time();
        }
        $data['slug'] = $slug;
        $data['user_id'] = Auth::user()->id;
        return $data;
        try {
            $result = Product::where('id', $id)->update($data);
            $result =  Product::where('id', $id)->first();
            return new ProductResource($result);
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
        $product = Product::where('id', $id)->first();
        if ($product == '') {
            return 'No data';
        }
        try {
            $result = $product->delete();
            return 'success';
        } catch (\Exception $e) {
            return $e;
        }
    }
}
