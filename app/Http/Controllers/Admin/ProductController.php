<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ProductInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $interface, $response;

    public function __construct(ProductInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $product = $this->interface->index();
            return view('admin.product.index', compact('product'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
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
    //         $product = $this->interface->find($id);
    //         return redirect()->route('product.show', compact('product'));
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function edit($id)
    {
        try {
            $product = $this->interface->find($id);
            return view('admin.product.edit', compact('product'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $product = $this->interface->update($request, $id);
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
            $product = $this->interface->destroy($id);
            return $product
                ? redirect()->route('product.index')->with('success', 'Delete successful')
                : redirect()->route('product.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
