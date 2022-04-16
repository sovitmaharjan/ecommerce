<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\PaymentInterface;
use App\Custom\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    protected $payment_interface, $response;

    public function __construct(PaymentInterface $payment_interface, ResponseService $response)
    {
        $this->payment_interface = $payment_interface;
        $this->response = $response;
    }

    public function index()
    {
        $payment = $this->payment_interface->index();
        return view('admin.payment.index', compact('payment'));
    }

    public function create()
    {
        return view('admin.payment.create');
    }

    public function store(PaymentRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->payment_interface->store($request);
            DB::commit();
            return redirect()->route('payment.index')->with('success', 'Save successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('payment.index')->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $payment = $this->payment_interface->find($id);
            return view('admin.payment.edit', compact('payment'));
        } catch (Exception $e) {
            return redirect()->route('payment.index')->with('error', $e->getMessage());
        }
    }

    public function update(PaymentRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->payment_interface->update($request, $id);
            DB::commit();
            return redirect()->route('payment.index')->with('success', 'Update successful');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('payment.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->payment_interface->destroy($id);
            return redirect()->route('payment.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('payment.index')->with('error', $e->getMessage());
        }
    }
}
