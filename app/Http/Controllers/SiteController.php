<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function contact_index()
{
return view('home.contact');
}

public function contact_process()
{
return view('home.contact_process');
}
    public function newsletter_confirm(){
        // return redirect("/home")->with('confirm','Thanks,your e-mail has been received');
        return view('home.newsletter');

    }

    public function newsletter_send(){

    }

public function search_item(){
    return view('home.search');


}

public function search_result(){
    return view('kala.single_product');


}
}
