<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BrandInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    protected $brand_interface, $response;

    public function __construct(BrandInterface $brand_interface, ResponseService $response)
    {
        $this->brand_interface = $brand_interface;
        $this->response = $response;
    }

    public function index()
    {
        $brand = $this->brand_interface->index();
        return view('admin.brand.index', compact('brand'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(BrandRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->brand_interface->store($request);
            DB::commit();
            return redirect()->route('brand.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('brand.index')->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $brand = $this->brand_interface->find($id);
            return view('admin.brand.edit', compact('brand'));
        } catch (Exception $e) {
            return redirect()->route('brand.index')->with('error', $e->getMessage());
        }
    }

    public function update(BrandRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->brand_interface->update($request, $id);
            DB::commit();
            return redirect()->route('brand.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('brand.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->brand_interface->destroy($id);
            return redirect()->route('brand.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('brand.index')->with('error', $e->getMessage());
        }
    }
}
