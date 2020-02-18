<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalaController extends Controller
{
    //

    public function new_product()
{
return view('kala.new_product');
}

    public function best_selling()
{
return view('kala.best_selling');
}

public function promotion()
{
return view('kala.promotion');
}

public function single_product()
{
return view('kala.single_product');
}

public function product_review(){
    return view('kala.single_product');

}
}
