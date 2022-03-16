<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductVariantDetailRequest;
use App\Http\Requests\UpdateProductVariantDetailRequest;
use App\Models\Admin\ProductVariantDetail;

class ProductVariantDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreProductVariantDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductVariantDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\ProductVariantDetail  $productVariantDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVariantDetail $productVariantDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ProductVariantDetail  $productVariantDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVariantDetail $productVariantDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductVariantDetailRequest  $request
     * @param  \App\Models\Admin\ProductVariantDetail  $productVariantDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductVariantDetailRequest $request, ProductVariantDetail $productVariantDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ProductVariantDetail  $productVariantDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVariantDetail $productVariantDetail)
    {
        //
    }
}
