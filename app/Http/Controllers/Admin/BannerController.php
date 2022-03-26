<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BannerInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BannerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    protected $interface, $response;

    public function __construct(BannerInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $banner = $this->interface->index();
            return view('admin.banner.index', compact('banner'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(BannerRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('banner.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $banner = $this->interface->find($id);
    //         return redirect()->route('banner.show', compact('banner'));
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function edit($id)
    {
        try {
            $banner = $this->interface->find($id);
            return view('admin.banner.edit', compact('banner'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(BannerRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $banner = $this->interface->update($request, $id);
            DB::commit();
            return $banner
                ? redirect()->route('banner.index')->with('success', 'Update successful')
                : redirect()->route('banner.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $banner = $this->interface->destroy($id);
            return $banner
                ? redirect()->route('banner.index')->with('success', 'Delete successful')
                : redirect()->route('banner.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
