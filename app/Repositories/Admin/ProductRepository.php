<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\ProductInterface;
use App\Custom\ImageService;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantDetail;
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
        $data = $request->except('image', '_token', 'variation');
        $data['user_id'] = Auth::user()->id;
        $result = Product::create($data);
        $this->saveVariant($result);
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
        $data = $request->except('image', '_method', '_token', 'variation');
        $result = $product->update($data);
        $this->saveVariant($product);
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

    public function saveVariant($result)
    {
        if ($result->wasRecentlyCreated == true) {
            foreach (request()->variation as $variant) {
                $product_variant = ProductVariant::create([
                    'product_id' => $result->id,
                    'sku' => $variant['sku'],
                    'sku_price' => $variant['sku_price'],
                    'quantity' => $variant['quantity']
                ]);
                foreach ($variant['attribute'] as $attribute) {
                    ProductVariantDetail::create([
                        'product_variant_id' => $product_variant->id,
                        'attribute_id' => $attribute['attribute_id'],
                        'attribute_value' => $attribute['attribute_value']
                    ]);
                }
            }
        } else {
            ProductVariant::whereIn()->delete();
            foreach (request()->variation as $variant) {
                $product_variant = ProductVariant::where('id', $variant->id)->update([
                    'product_id' => $result->id,
                    'sku' => $variant['sku'],
                    'sku_price' => $variant['sku_price'],
                    'quantity' => $variant['quantity']
                ]);
                ProductVariantDetail::whereIn()->delete();
                foreach ($variant['attribute'] as $attribute) {
                    ProductVariantDetail::where('id', $attribute->id)->update([
                        'product_variant_id' => $product_variant->id,
                        'attribute_id' => $attribute['attribute_id'],
                        'attribute_value' => $attribute['attribute_value']
                    ]);
                }
            }
        }
    }
}
