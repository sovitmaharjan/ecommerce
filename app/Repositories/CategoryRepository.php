<?php

namespace App\Repositories;

use App\Contracts\CategoryInterface;
use App\Custom\ImageService;
use App\Models\Category;
use Exception;

class CategoryRepository implements CategoryInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $result = Category::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = Category::where('id', $id)->first();
        if (!$result) {
            throw new Exception('No Data');
        }
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('image', '_token');
        $result = Category::create($data);
        if ($file = $request->image) {
            $this->image->upload($result, $file);
        }
        return $result;
    }

    public function update($request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            throw new Exception('No Data');
        }
        $data = $request->except('image', '_method', '_token');
        $result = $category->update($data);
        if ($file = $request->image) {
            $this->image->upload($category, $file, $category->image->path ?? null);
        }
        return $result;
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            throw new Exception('No Data');
        }
        $result = $category->delete();
        $this->image->delete($category, $category->image->path ?? null);
        return $result;
    }
}
