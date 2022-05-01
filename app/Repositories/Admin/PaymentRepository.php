<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\PaymentInterface;
use App\Models\Payment;
use Exception;

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
        if (!$result) {
            throw new Exception('No Data');
        }
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
        $payment = Payment::find($id);
        if (!$payment) {
            throw new Exception('No Data');
        }
        $data = $request->except('_method', '_token', 'key');
        $data['key'] = json_encode($request->key);
        $result = $payment->update($data);
        return $result;
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        if (!$payment) {
            throw new Exception('No Data');
        }
        $result = $payment->delete();
        return $result;
    }
}
