<?php

namespace Packages\Http\Controllers;

use App\Http\Controllers\Controller;
use Packages\App\Models\Brand;

class HallController extends Controller
{

    public function index ()
    {
        visitor()->visit();
        $brands = Brand::all();
        return view('http::hall.index',compact('brands'));
    }
}
