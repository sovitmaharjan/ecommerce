<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\CategoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $category_interface;

    public function __construct(CategoryInterface $category_interface)
    {
        $this->category_interface = $category_interface;
    }

    public function index()
    {
        $category = $this->category_interface->index();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        try {
            $all_category = $this->category_interface->index();
            return view('admin.category.create', compact('all_category'));
        } catch (Exception $e) {
            return redirect()->route('category.index')->with('error', $e->getMessage());
        }
    }

    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->category_interface->store($request);
            DB::commit();
            return redirect()->route('category.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('category.index')->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $category = $this->category_interface->find($id);
            $all_category = $this->category_interface->index();
            return view('admin.category.edit', compact('category', 'all_category'));
        } catch (Exception $e) {
            return redirect()->route('category.index')->with('error', $e->getMessage());
        }
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->category_interface->update($request, $id);
            DB::commit();
            return redirect()->route('category.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('category.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->category_interface->destroy($id);
            return redirect()->route('category.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('category.index')->with('error', $e->getMessage());
        }
    }
}
