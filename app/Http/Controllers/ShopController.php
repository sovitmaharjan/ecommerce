<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        $product = Product::paginate(20);
        // dd($product);
        $category = Category::all();
        $banner = Banner::where('type', 'shop_banner')->first();
        return view('shop', compact('product', 'category', 'banner'));
    }
}
