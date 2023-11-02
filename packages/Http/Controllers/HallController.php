<?php

namespace Packages\Http\Controllers;

use App\Http\Controllers\Controller;
use Packages\App\Models\Brand;

class HallController extends Controller
{

    public function index ()
    {
        $brands = Brand::all();
        return view('http::hall.index',compact('brands'));
    }
}
