<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\AttributeInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeRequest;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    protected $interface, $response;

    public function __construct(AttributeInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $attribute = $this->interface->index();
            return view('admin.attribute.index', compact('attribute'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.attribute.create');
    }

    public function store(AttributeRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('attribute.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function edit($id)
    {
        try {
            $attribute = $this->interface->find($id);
            return view('admin.attribute.edit', compact('attribute'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(AttributeRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $attribute = $this->interface->update($request, $id);
            DB::commit();
            return $attribute
                ? redirect()->route('attribute.index')->with('success', 'Update successful')
                : redirect()->route('attribute.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $attribute = $this->interface->destroy($id);
            return $attribute
                ? redirect()->route('attribute.index')->with('success', 'Delete successful')
                : redirect()->route('attribute.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
