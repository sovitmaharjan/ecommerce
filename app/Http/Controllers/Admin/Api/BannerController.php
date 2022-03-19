<?php

namespace App\Http\Controllers\Admin\Api;

use App\Contracts\BannerInterface;
use App\Custom\ImageService;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BannerRequest;
use App\Http\Resources\BannerResource;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $interface, $response;

    public function __construct(BannerInterface $interface, ResponseService $response, ImageService $imageService)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try{
            $result = $this->interface->index();
            if($result == null){
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'banner' => BannerResource::collection($result),
            ], '', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        //
    }

    public function store(BannerRequest $request)
    {
        try {
            $result = $this->interface->store($request);
            return $this->response->responseSuccess([
                'banner' => new BannerResource($result),
            ], 'Saved Successful', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function show($id)
    {
        try{
            $result = $this->interface->show($id);
            if($result == null){
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'banner' => new BannerResource($result),
            ], '', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            $result = $this->interface->update($request, $id);
            if($result == null){
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'banner' => new BannerResource($result),
            ], 'Update Successful', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $result = $this->interface->destroy($id);
            if($result == null){
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccessMsg('Delete Successful', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
