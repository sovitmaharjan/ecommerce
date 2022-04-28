<?php

namespace App\Http\Controllers\Admin\Api;

use App\Contracts\Admin\BrandInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BannerRequest;
use App\Http\Resources\BrandResource;
use Exception;

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
            $result = $this->interface->index();
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'brand' => BrandResource::collection($result),
            ], '', 200);
        } catch (Exception $e) {
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
                'brand' => new BrandResource($result),
            ], 'Saved Successful', 200);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show($id)
    {
        try {
            $result = $this->interface->show($id);
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'brand' => new BrandResource($result),
            ], '', 200);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(BannerRequest $request, $id)
    {
        try {
            $result = $this->interface->update($request, $id);
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'brand' => new BrandResource($result),
            ], 'Update Successful', 200);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $result = $this->interface->destroy($id);
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccessMsg('Delete Successful', 200);
        } catch (Exception $e) {
            return $e;
        }
    }
}
