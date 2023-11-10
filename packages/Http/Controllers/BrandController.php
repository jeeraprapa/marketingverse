<?php

namespace Packages\Http\Controllers;

use App\Http\Controllers\Controller;
use Packages\App\Models\Brand;

class BrandController extends Controller
{

    public function index ($slug)
    {
        $brand = Brand::where('slug',$slug)->first();
        return view('http::hall.brand',compact('brand'));
    }
}
