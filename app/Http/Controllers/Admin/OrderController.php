<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\OrderInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $order_interface;

    public function __construct(OrderInterface $order_interface)
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
        $this->order_interface = $order_interface;
    }

    public function index()
    {
        $order = $this->order_interface->index();
        return view('admin.order.index', compact('order'));
    }

    // public function create()
    // {
    //     return view('admin.order.create');
    // }

    // public function store(OrderRequest $request)
    // {
    //     try {
    //         DB::beginTransaction();
    //         $result = $this->order_interface->store($request);
    //         DB::commit();
    //         return redirect()->route('order.index')->with('success', 'Save successful');
    //     } catch (Exception $e) {
    //         DB::rollBack();
    //         return $e;
    //     }
    // }

    public function show($id)
    {
        try {
            $order = $this->order_interface->find($id);
            return view('admin.order.show', compact('order'));
        } catch (Exception $e) {
            return redirect()->route('order.index')->with('error', $e->getMessage());
        }
    }

    // public function update(OrderRequest $request, $id)
    // {
    //     try {
    //         DB::beginTransaction();
    //         $order = $this->order_interface->update($request, $id);
    //         DB::commit();
    //         return $order
    //             ? redirect()->route('order.index')->with('success', 'Update successful')
    //             : redirect()->route('order.index')->with('error', 'Update fail');
    //     } catch (Exception $e) {
    //         DB::rollBack();
    //         return $e;
    //     }
    // }

    // public function destroy($id)
    // {
    //     try {
    //         $order = $this->order_interface->destroy($id);
    //         return $order
    //             ? redirect()->route('order.index')->with('success', 'Delete successful')
    //             : redirect()->route('order.index')->with('info', 'Detail fail');
    //     } catch (Exception $e) {
    //         return $e;
    //     }
    // }
}
