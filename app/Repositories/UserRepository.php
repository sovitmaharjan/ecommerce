<?php

namespace App\Repositories;

use App\Contracts\UserInterface;
use App\Custom\ImageService;
use App\Models\User;
use Exception;

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
        if (!$result) {
            throw new Exception('No Data');
        }
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
        $user = User::find($id);
        if (!$user) {
            throw new Exception('No Data');
        }
        $data = $request->except('image', '_method', '_token');
        $result = $user->update($data);
        if ($file = $request->image) {
            $this->image->upload($user, $file, $user->image->path ?? null);
        }
        return $result;
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            throw new Exception('No Data');
        }
        $result = $user->delete();
        $this->image->delete($user, $user->image->path ?? null);
        return $result;
    }
}
