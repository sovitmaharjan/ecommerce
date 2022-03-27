<?php

namespace App\Repositories;

use App\Contracts\UserInterface;
use App\Custom\ImageService;
use App\Models\User;

class UserRepository implements UserInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $result = User::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = User::where('id', $id)->first();
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('image', '_token');
        $result = User::create($data);
        if ($file = $request->image) {
            $this->image->upload($result, $file);
        }
        return $result;
    }

    public function update($request, $id)
    {
        $banner = User::find($id);
        if ($banner) {
            $data = $request->except('image', '_method', '_token');
            $result = $banner->update($data);
            if ($file = $request->image) {
                $this->image->upload($banner, $file, $banner->image->path ?? null);
            }
        }
        return $result ?? 0;
    }

    public function destroy($id)
    {
        $banner = User::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
            $this->image->delete($banner, $banner->image->path ?? null);
        }
        return $result ?? 0;
    }
}
