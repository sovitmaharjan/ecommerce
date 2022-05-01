<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\OrderInterface;
use App\Models\Order;
use Exception;

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
        if (!$result) {
            throw new Exception('No Data');
        }
        return $result;
    }

    // public function store($request)
    // {
    //     $data = $request->except('_token');
    //     $result = Order::create($data);
    //     return $result;
    // }

    // public function update($request, $id)
    // {
    //     $order = Order::find($id);
    //     if (!$order) {
    //         throw new Exception('No Data');
    //     }
    //     $data = $request->except('_method', '_token');
    //     $result = $order->update($data);
    //     return $result;
    // }

    // public function destroy($id)
    // {
    //     $order = Order::find($id);
    //     if (!$order) {
    //         throw new Exception('No Data');
    //     }
    //     $result = $order->delete();
    //     return $result;
    // }
}
