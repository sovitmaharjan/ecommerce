<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\AttributeInterface;
use App\Contracts\Admin\CategoryInterface;
use App\Contracts\Admin\ProductInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $product_interface, $category_interface, $attribute_interface;

    public function __construct(ProductInterface $product_interface, CategoryInterface $category_interface, AttributeInterface $attribute_interface)
    {
        $this->product_interface = $product_interface;
        $this->category_interface = $category_interface;
        $this->attribute_interface = $attribute_interface;
    }

    public function index()
    {
        $product = $this->product_interface->index();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        try {
            $all_category = $this->category_interface->index();
            $all_attribute = $this->attribute_interface->index();
            return view('admin.product.create', compact('all_category', 'all_attribute'));
        } catch (Exception $e) {
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->product_interface->store($request);
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $product = $this->product_interface->find($id);
    //         return redirect()->route('product.show', compact('product'));
    //     } catch (Exception $e) {
    //         return $e;
    //     }
    // }

    public function edit($id)
    {
        try {
            $product = $this->product_interface->find($id);
            $all_category = $this->category_interface->index();
            return view('admin.product.edit', compact('product', 'all_category'));
        } catch (Exception $e) {
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->product_interface->update($request, $id);
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->product_interface->destroy($id);
            return redirect()->route('product.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }
}
