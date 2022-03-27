<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BrandInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    protected $interface, $response;

    public function __construct(BrandInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $brand = $this->interface->index();
            return view('admin.brand.index', compact('brand'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(BrandRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('brand.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function edit($id)
    {
        try {
            $brand = $this->interface->find($id);
            return view('admin.brand.edit', compact('brand'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(BrandRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $brand = $this->interface->update($request, $id);
            DB::commit();
            return $brand
                ? redirect()->route('brand.index')->with('success', 'Update successful')
                : redirect()->route('brand.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $brand = $this->interface->destroy($id);
            return $brand
                ? redirect()->route('brand.index')->with('success', 'Delete successful')
                : redirect()->route('brand.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
