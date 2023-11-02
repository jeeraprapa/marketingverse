<?php

namespace Packages\Admin\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index ()
    {
        return view('admin::auth.login');
    }

    public function login (Request $request)
    {
        $remember = $request->has('remember');

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            $user = auth()->guard('admin')->user();
            if($user->status == 'ACTIVATE'){
                return redirect()->route('admin::dashboard')->with('success','You are Logged in successfully.');
            }
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }
    }

    public function logout ()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout successfully');
        return redirect(route('admin::login'));
    }
}
