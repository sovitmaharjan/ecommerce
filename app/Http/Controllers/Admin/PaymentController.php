<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\PaymentInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    protected $interface, $response;

    public function __construct(PaymentInterface $interface, ResponseService $response)
    {
        $this->interface = $interface;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $payment = $this->interface->index();
            return view('admin.payment.index', compact('payment'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function create()
    {
        return view('admin.payment.create');
    }

    public function store(PaymentRequest $request)
    {
        try {
            DB::beginTransaction();
            $result = $this->interface->store($request);
            DB::commit();
            return redirect()->route('payment.index')->with('success', 'Save successful');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function edit($id)
    {
        try {
            $payment = $this->interface->find($id);
            return view('admin.payment.edit', compact('payment'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update(PaymentRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $payment = $this->interface->update($request, $id);
            DB::commit();
            return $payment
                ? redirect()->route('payment.index')->with('success', 'Update successful')
                : redirect()->route('payment.index')->with('error', 'Update fail');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function destroy($id)
    {
        try {
            $payment = $this->interface->destroy($id);
            return $payment
                ? redirect()->route('payment.index')->with('success', 'Delete successful')
                : redirect()->route('payment.index')->with('info', 'Detail fail');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
