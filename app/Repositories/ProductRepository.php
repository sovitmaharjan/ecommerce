<?php

namespace App\Repositories;

use App\Contracts\ProductInterface;
use App\Models\Admin\Product;

class ProductRepository implements ProductInterface
{
    public function index()
    {
        $banner = Product::all();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function show($id)
    {
        $banner = Product::where('id', $id)->first();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function store($request)
    {
        $data = $request->all();
        $banner = Product::create($data);
        return $banner;
    }

    public function update($request, $id)
    {
        $banner = Product::find($id);
        if ($banner) {
            $data = $request->except('_method');
            $banner->update($data);
            return $banner->refresh();
        }
        return null;
    }

    public function destroy($id)
    {
        $banner = Product::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            return $result;
        }
        return null;
    }
}
