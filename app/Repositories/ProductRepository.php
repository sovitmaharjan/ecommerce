<?php

namespace App\Repositories;

use App\Contracts\ProductInterface;
use App\Custom\ImageService;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductRepository implements ProductInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $result = Product::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = Product::where('id', $id)->first();
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('image', '_token');
        $data['user_id'] = Auth::user()->id;
        $result = Product::create($data);
        if ($file = $request->image) {
            $this->image->upload($result, $file);
        }
        return $result;
    }

    public function update($request, $id)
    {
        $banner = Product::find($id);
        if ($banner) {
            $data = $request->except('image', '_method', '_token');
            $result = $banner->update($data);
            if ($file = $request->image) {
                $this->image->upload($banner, $file, $banner->image->path ?? null);
            }
        }
        return $result ?? 0;
    }

    public function destroy($id)
    {
        $banner = Product::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            $this->image->delete($banner, $banner->image->path ?? null);
        }
        return $result ?? 0;
    }
}
