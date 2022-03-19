<?php

namespace App\Http\Controllers\Admin\Api;

use App\Contracts\ProductInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    protected $interface, $response;

    public function __construct(ProductInterface $interface, ResponseService $response)
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
                'banner' => ProductResource::collection($result),
            ], '', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        //
    }

    public function store(ProductRequest $request)
    {
        try {
            $result = $this->interface->store($request);
            return $this->response->responseSuccess([
                'banner' => new ProductResource($result),
            ], 'Saved Successful', 200);
        } catch (\Exception $e) {
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
                'banner' => new ProductResource($result),
            ], '', 200);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            $result = $this->interface->update($request, $id);
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'banner' => new ProductResource($result),
            ], 'Update Successful', 200);
        } catch (\Exception $e) {
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
        } catch (\Exception $e) {
            return $e;
        }
    }
}
