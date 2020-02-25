<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kala;

class Home1Controller extends Controller
{
    //
    public function index(){
        // dd('hi');
        $products=kala::orderBy('id','DESC')->take('5')->get();
  //       dd($products[0]->photos[0]);

        return view('home',compact(['products']));
    }

    public function index1(){
        return view('home.members_home');
    }
}
