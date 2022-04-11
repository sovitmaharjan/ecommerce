<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryInterface;
use App\Contracts\ProductInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $product, $category, $response;

    public function __construct(ProductInterface $product, CategoryInterface $category, ResponseService $response)
    {
        $this->product = $product;
        $this->category = $category;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $product = $this->product->index();
            return view('admin.product.index', compact('product'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        try {
            $all_category = $this->category->index();
            return view('admin.product.create', compact('all_category'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->product->store($request);
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $product = $this->product->find($id);
    //         return redirect()->route('product.show', compact('product'));
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function edit($id)
    {
        try {
            $product = $this->product->find($id);
            $all_category = $this->category->index();
            return view('admin.product.edit', compact('product', 'all_category'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $product = $this->product->update($request, $id);
            DB::commit();
            return $product
                ? redirect()->route('product.index')->with('success', 'Update successful')
                : redirect()->route('product.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $product = $this->product->destroy($id);
            return $product
                ? redirect()->route('product.index')->with('success', 'Delete successful')
                : redirect()->route('product.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
