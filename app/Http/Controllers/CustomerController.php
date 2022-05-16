<?php

namespace App\Http\Controllers;

use App\Custom\ImageService;
use App\Models\CustomerProfile;
use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    protected $image;
    public function __construct(ImageService $image)
    {
        $this->image = $image;
    }
    
    public function dashboard()
    {
        $recent_order = Order::where('user_id', Auth::user()->id)->limit(4)->orderBy('created_at', 'DESC')->get();
        return view('customer-dashboard', compact('recent_order'));
    }

    public function profile()
    {
        return view('customer-profile');
    }

    public function profileStore(Request $request)
    {
        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png|max:4096',
            'name' => 'required',
            'mobile' => 'required',
            'dob' => 'nullable',
            'gender' => 'required|in:male,female'
        ]);
        DB::transaction(function () use ($request) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name
            ]);
            $customer_profile = CustomerProfile::updateOrCreate(
                ['id' => Auth::user()->id],
                [
                    'user_id' => Auth::user()->id,
                    'mobile' => $request->mobile,
                    'dob' => $request->dob,
                    'gender' => $request->gender
                ]
            );
            if ($customer_profile->wasRecentlyCreated == true) {
                if ($file = $request->image) {
                    $this->image->upload($customer_profile, $file);
                }
            } else {
                if ($file = $request->image) {
                    $this->image->upload($customer_profile, $file, $customer_profile->image ? ($customer_profile->image->path ?? null) : null);
                }
            }
        });
        return back()->with('success', 'Data save successfully');
    }

    public function wishlist() {
        $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
        return view('customer-wishlist', compact('wishlist'));
    }

    public function wishlistStore(Request $request) {
        dd($request->all());
    }

    public function wishlistDelete($id) {
        $result = Wishlist::destroy($id);
        if(!$result){
            return back()->with('error', 'Something went wrong');
        }
        return back()->with('success', 'Product removed');
    }
}
