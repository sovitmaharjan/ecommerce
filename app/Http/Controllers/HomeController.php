<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function updateStatus(Request $request, $id) {
        $status = DB::table($request->table_name)->where('id', $id)->pluck('status')->first();
        $status = $status != 'active' ? : 'inactive';
        $result = DB::table($request->table_name)
            ->where('id', $id)
            ->update(['status' => $status]);
        if($result){
            return response('success');
        }
        return response('fail');
    }
}
