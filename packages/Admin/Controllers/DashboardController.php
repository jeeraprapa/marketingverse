<?php

namespace Packages\Admin\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index ()
    {
        return view('admin::dashboard');
    }
}
