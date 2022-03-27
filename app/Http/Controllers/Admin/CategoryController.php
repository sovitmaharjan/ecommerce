<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $interface, $response;

    public function __construct(CategoryInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $category = $this->interface->index();
            return view('admin.category.index', compact('category'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        try {
            $all_category = $this->interface->index();
            return view('admin.category.create', compact('all_category'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('category.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function edit($id)
    {
        try {
            $category = $this->interface->find($id);
            $all_category = $this->interface->index();
            return view('admin.category.edit', compact('category', 'all_category'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $category = $this->interface->update($request, $id);
            DB::commit();
            return $category
                ? redirect()->route('category.index')->with('success', 'Update successful')
                : redirect()->route('category.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $category = $this->interface->destroy($id);
            return $category
                ? redirect()->route('category.index')->with('success', 'Delete successful')
                : redirect()->route('category.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
