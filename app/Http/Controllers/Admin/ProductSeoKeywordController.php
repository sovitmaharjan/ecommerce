<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductSeoKeywordRequest;
use App\Http\Requests\UpdateProductSeoKeywordRequest;
use App\Models\Admin\ProductSeoKeyword;

class ProductSeoKeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductSeoKeywordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSeoKeywordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\ProductSeoKeyword  $productSeoKeyword
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSeoKeyword $productSeoKeyword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ProductSeoKeyword  $productSeoKeyword
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSeoKeyword $productSeoKeyword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSeoKeywordRequest  $request
     * @param  \App\Models\Admin\ProductSeoKeyword  $productSeoKeyword
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductSeoKeywordRequest $request, ProductSeoKeyword $productSeoKeyword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ProductSeoKeyword  $productSeoKeyword
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSeoKeyword $productSeoKeyword)
    {
        //
    }
}
