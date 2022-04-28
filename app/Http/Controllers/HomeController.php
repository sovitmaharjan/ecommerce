<?php

namespace App\Http\Controllers;

use App\Contracts\Admin\CategoryInterface;
use App\Contracts\HomeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $home_interface, $category_interface;

    public function __construct(HomeInterface $home_interface, CategoryInterface $category_interface)
    {
        $this->home_interface = $home_interface;
        $this->category_interface = $category_interface;
    }

    public function index()
    {
        $data['slider'] = $this->home_interface->banner('slider');
        $data['first_category_section'] = $this->home_interface->banner('first_category_section');
        $data['second_category_section'] = $this->home_interface->banner('second_category_section');
        $category = $this->category_interface->index();
        return view('home', compact('data'));
    }

    public function about() {
        return view('about-us');
    }
}
