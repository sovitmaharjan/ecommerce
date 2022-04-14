<?php

namespace App\Repositories;

use App\Contracts\OrderInterface;
use App\Models\Order;

class OrderRepository implements OrderInterface
{
    public function index()
    {
        $result = Order::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = Order::where('id', $id)->with('user')->first();
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('_token');
        $result = Order::create($data);
        return $result;
    }

    public function update($request, $id)
    {
        $banner = Order::find($id);
        if ($banner) {
            $data = $request->except('_method', '_token');
            $result = $banner->update($data);
        }
        return $result ?? 0;
    }

    public function destroy($id)
    {
        $banner = Order::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
        }
        return $result ?? 0;
    }
}
