<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductSpecificationRequest;
use App\Http\Requests\UpdateProductSpecificationRequest;
use App\Models\Admin\ProductSpecification;

class ProductSpecificationController extends Controller
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
     * @param  \App\Http\Requests\StoreProductSpecificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSpecificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\ProductSpecification  $productSpecification
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSpecification $productSpecification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ProductSpecification  $productSpecification
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSpecification $productSpecification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSpecificationRequest  $request
     * @param  \App\Models\Admin\ProductSpecification  $productSpecification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductSpecificationRequest $request, ProductSpecification $productSpecification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ProductSpecification  $productSpecification
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSpecification $productSpecification)
    {
        //
    }
}
