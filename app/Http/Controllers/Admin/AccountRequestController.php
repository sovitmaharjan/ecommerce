<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\AccountRequestInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class AccountRequestController extends Controller
{
    protected $account_request_interface;

    public function __construct(AccountRequestInterface $account_request_interface)
    {
        $this->middleware('role:admin');
        $this->account_request_interface = $account_request_interface;
    }

    public function index()
    {
        $account_request = $this->account_request_interface->index();
        return view('admin.account-request.index', compact('account_request'));
    }

    public function store(AccountRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->account_request_interface->store($request);
            DB::commit();
            return redirect()->route('login')->with('success', 'Details sent. You will be notify via mail when you account is ready');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $banner = $this->account_request_interface->find($id);
    //         return redirect()->route('banner.show', compact('banner'));
    //     } catch (Exception $e) {
    //         return redirect()->route('account-request.index')->with('error', $e->getMessage());
    //     }
    // }

    public function edit($id)
    {
        try {
            $account_request = $this->account_request_interface->createAccount($id);
            return redirect()->route('account-request.index')->with('success', 'Account created successful. Mail sent successfully.');
        } catch (Exception $e) {
            return redirect()->route('account-request.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->account_request_interface->destroy($id);
            return redirect()->route('account-request.index')->with('success', 'Delete successful');
        } catch (Exception $e) {
            return redirect()->route('account-request.index')->with('error', $e->getMessage());
        }
    }
}
