<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\PaymentInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    protected $payment_interface;

    public function __construct(PaymentInterface $payment_interface)
    {
        $this->middleware('permission:payment-list|payment-create|payment-edit|payment-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:payment-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:payment-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:payment-delete', ['only' => ['destroy']]);

        $this->payment_interface = $payment_interface;
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
