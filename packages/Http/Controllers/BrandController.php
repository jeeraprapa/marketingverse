<?php

namespace Packages\Http\Controllers;

use App\Http\Controllers\Controller;
use Packages\App\Models\Brand;

class BrandController extends Controller
{

    public function index ()
    {
        $brands = Brand::all();
        return view('http::hall.brand',compact('brands'));
    }
}
