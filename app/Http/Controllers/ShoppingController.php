<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    //
    public function cart(){
        return view('shopping.cart');
    }

    public function add_to_cart(){
        return view('shopping.cart');

    }

    public function fetch_cart(){


    }

    public function checkout(){
        return view('shopping.checkout');

    }

    public function confirmation(){
        return view('shopping.confirmation');

    }
    public function tracking_view(){
        return view('shopping.tracking_view');

    }


    public function tracking(){
        return view('shopping.tracking');

    }
}
