<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tags;

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
/**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */

public function search_result(Request $request){
    // dd($request->search);
    $search=$request->search;
    $tag=tags::whereName($search)->first();
    // $id=$tag['id'];
    // dd($tag->kala);
    return view('home.searchresult',compact(['tag']));


}
}
