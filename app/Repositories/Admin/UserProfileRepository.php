<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\UserProfileInterface;
use App\Custom\ImageService;
use App\Models\UserProfile;
use Exception;

class UserProfileRepository implements UserProfileInterface
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $result = UserProfile::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = UserProfile::where('id', $id)->first();
        if (!$result) {
            throw new Exception('No Data');
        }
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('image', '_token');
        $result = UserProfile::create($data);
        if ($file = $request->image) {
            $this->image->upload($result, $file);
        }
        return $result;
    }

    public function update($request, $id)
    {
        $banner = UserProfile::find($id);
        if (!$banner) {
            throw new Exception('No Data');
        }
        $data = $request->except('image', '_method', '_token');
        $result = $banner->update($data);
        if ($file = $request->image) {
            $this->image->upload($banner, $file, $banner->image->path ?? null);
        }
        return $result;
    }

    public function destroy($id)
    {
        $banner = UserProfile::find($id);
        if (!$banner) {
            throw new Exception('No Data');
        }
        $result = $banner->delete();
        $this->image->delete($banner, $banner->image->path ?? null);
        return $result;
    }
}
