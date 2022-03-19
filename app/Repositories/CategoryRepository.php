<?php

namespace App\Repositories;

use App\Contracts\CategoryInterface;
use App\Models\Admin\Category;

class CategoryRepository implements CategoryInterface
{
    public function index()
    {
        $banner = Category::all();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function show($id)
    {
        $banner = Category::where('id', $id)->first();
        if ($banner) {
            return $banner;
        }
        return null;
    }

    public function store($request)
    {
        $data = $request->all();
        $banner = Category::create($data);
        return $banner;
    }

    public function update($request, $id)
    {
        $banner = Category::find($id);
        if ($banner) {
            $data = $request->except('_method');
            $banner->update($data);
            return $banner->refresh();
        }
        return null;
    }

    public function destroy($id)
    {
        $banner = Category::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            return $result;
        }
        return null;
    }
}
