<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\BannerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    protected $banner_interface;

    public function __construct(BannerInterface $banner_interface)
    {
        $this->banner_interface = $banner_interface;
    }

    public function index()
    {
        $banner = $this->banner_interface->index();
        return view('admin.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(BannerRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->banner_interface->store($request);
            DB::commit();
            return redirect()->route('banner.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('banner.index')->with('error', $e->getMessage());
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $banner = $this->banner_interface->find($id);
    //         return redirect()->route('banner.show', compact('banner'));
    //     } catch (Exception $e) {
    //         return redirect()->route('banner.index')->with('error', $e->getMessage());
    //     }
    // }

    public function edit($id)
    {
        try {
            $banner = $this->banner_interface->find($id);
            return view('admin.banner.edit', compact('banner'));
        } catch (Exception $e) {
            return redirect()->route('banner.index')->with('error', $e->getMessage());
        }
    }

    public function update(BannerRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->banner_interface->update($request, $id);
            DB::commit();
            return redirect()->route('banner.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('banner.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->banner_interface->destroy($id);
            return redirect()->route('banner.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('banner.index')->with('error', $e->getMessage());
        }
    }
}
