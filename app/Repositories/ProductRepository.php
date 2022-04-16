<?php

namespace App\Repositories;

use App\Contracts\ProductInterface;
use App\Custom\ImageService;
use App\Models\Product;
use Exception;
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
        if (!$result) {
            throw new Exception('No Data');
        }
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
        $product = Product::find($id);
        if (!$product) {
            throw new Exception('No Data');
        }
        $data = $request->except('image', '_method', '_token');
        $result = $product->update($data);
        if ($file = $request->image) {
            $this->image->upload($product, $file, $product->image->path ?? null);
        }
        return $result;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            throw new Exception('No Data');
        }
        $result = $product->delete();
        $this->image->delete($product, $product->image->path ?? null);
        return $result;
    }
}
