<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct()
    {
        $this->middleware('Role');
    }

    public function index()
    {
        return view('home');
    }

    public function dashboard1()
    {
        return view('Admin.dashboard1');
    }

    public function dashboard2()
    {

        return view('admin.dashboard2');
    }
}
