<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\AttributeInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    protected $attribute_interface;

    public function __construct(AttributeInterface $attribute_interface)
    {
        $this->middleware('role:admin|vendor');
        $this->attribute_interface = $attribute_interface;
    }

    public function index()
    {
        $attribute = $this->attribute_interface->index();
        return view('admin.attribute.index', compact('attribute'));
    }

    public function create()
    {
        return view('admin.attribute.create');
    }

    public function store(AttributeRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->attribute_interface->store($request);
            DB::commit();
            return redirect()->route('attribute.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('attribute.index')->with('error', $e->getMessage());
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $banner = $this->attribute_interface->find($id);
    //         return redirect()->route('banner.show', compact('banner'));
    //     } catch (Exception $e) {
    //         return redirect()->route('attribute.index')->with('error', $e->getMessage());
    //     }
    // }

    public function edit($id)
    {
        try {
            $attribute = $this->attribute_interface->find($id);
            return view('admin.attribute.edit', compact('attribute'));
        } catch (Exception $e) {
            return redirect()->route('attribute.index')->with('error', $e->getMessage());
        }
    }

    public function update(AttributeRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->attribute_interface->update($request, $id);
            DB::commit();
            return redirect()->route('attribute.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('attribute.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->attribute_interface->destroy($id);
            return redirect()->route('attribute.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('attribute.index')->with('error', $e->getMessage());
        }
    }
}
