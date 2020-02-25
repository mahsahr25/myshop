<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kala;
use App\Models\reviews;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;

// use App\Auth;



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

public function single_product($id)
{

    // dd($id);
    $product=kala::findorfail($id);
    // foreach($product->reviews as $rev)
    // foreach($rev->users as $user)
    // dd($rev->users()->photos['name']) ;
return view('kala.single_product',compact(['product']));
}

use AuthenticatesUsers;


/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function product_review(Request $request){
    // dd($request->id);
    $comment=new reviews;
    $comment->description=$request->message;
    $comment->kala_id=$request->id;
    if(isset(auth()->user()->name)){
        $user=auth()->user()->name;
    $comment->user_id=$user;

    }
    $comment->save();



    return view('kala.single_product');

}
}
