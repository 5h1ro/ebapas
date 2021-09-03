<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $role = Auth::user()->role;
        $uid  = Auth::user()->uid;
        $value = $request->cookie('ebima');
        if ($role == "admin" && $uid == $value) {
            return redirect()->to('admin');
        } else {
            Auth::logout();
            return redirect()->route('error')->with('alert', 'Device tidak terdaftar');
        }
    }
}
