<?php

namespace App\Repositories;

use App\Contracts\PaymentInterface;
use App\Models\Payment;

class PaymentRepository implements PaymentInterface
{

    public function index()
    {
        $result = Payment::orderBy('created_at', 'DESC')->get();
        return $result;
    }

    public function find($id)
    {
        $result = Payment::where('id', $id)->first();
        return $result;
    }

    public function store($request)
    {
        $data = $request->except('_token', 'key');
        $data['key'] = json_encode($request->key);
        $result = Payment::create($data);
        return $result;
    }

    public function update($request, $id)
    {
        $banner = Payment::find($id);
        if ($banner) {
            $data = $request->except('_method', '_token', 'key');
            $data['key'] = json_encode($request->key);
            $result = $banner->update($data);
        }
        return $result ?? 0;
    }

    public function destroy($id)
    {
        $banner = Payment::where('id', $id)->first();
        if ($banner) {
            $result = $banner->delete();
        }
        return $result ?? 0;
    }
}
