<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductVariantAttributeRequest;
use App\Http\Requests\UpdateProductVariantAttributeRequest;
use App\Models\Admin\ProductVariantAttribute;

class ProductVariantAttributeController extends Controller
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
     * @param  \App\Http\Requests\StoreProductVariantAttributeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductVariantAttributeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\ProductVariantAttribute  $productVariantAttribute
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVariantAttribute $productVariantAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ProductVariantAttribute  $productVariantAttribute
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVariantAttribute $productVariantAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductVariantAttributeRequest  $request
     * @param  \App\Models\Admin\ProductVariantAttribute  $productVariantAttribute
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductVariantAttributeRequest $request, ProductVariantAttribute $productVariantAttribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ProductVariantAttribute  $productVariantAttribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVariantAttribute $productVariantAttribute)
    {
        //
    }
}
