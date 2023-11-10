<?php

namespace Packages\Admin\Controllers;

use App\Http\Controllers\Controller;
use Packages\App\Models\Brand;
use Shetabit\Visitor\Models\Visit;

class DashboardController extends Controller
{

    public function index ()
    {
        $brands = Brand::all();
        $hallCount = Visit::whereNull('visitable_type')->count();
        $brandCount = Visit::whereNotNull('visitable_type')->count();
        return view('admin::dashboard',compact('brands','hallCount','brandCount'));
    }
}
