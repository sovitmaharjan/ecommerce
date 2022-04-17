<?php

namespace App\Http\Controllers;

use App\Contracts\HomeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $home_interface;

    public function __construct(HomeInterface $home_interface)
    {
        $this->home_interface = $home_interface;
    }

    public function index()
    {
        $banner = $this->home_interface->index();
        return view('home', compact('banner'));
    }
}
