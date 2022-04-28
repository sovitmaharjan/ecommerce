<?php

namespace App\Http\Controllers\Admin\Api;

use App\Contracts\Admin\CategoryInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryRequest;
use App\Http\Resources\CategoryResource;
use Exception;

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
            $result = $this->interface->index();
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'category' => CategoryResource::collection($result),
            ], '', 200);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        //
    }

    public function store(CategoryRequest $request)
    {
        try {
            $result = $this->interface->store($request);
            return $this->response->responseSuccess([
                'category' => new CategoryResource($result),
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
                'category' => new CategoryResource($result),
            ], '', 200);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $result = $this->interface->update($request, $id);
            if ($result == null) {
                return $this->response->responseSuccessMsg('No Data', 200);
            }
            return $this->response->responseSuccess([
                'category' => new CategoryResource($result),
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
