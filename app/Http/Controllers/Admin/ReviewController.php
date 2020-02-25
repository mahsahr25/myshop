<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reviews;
use App\Models\kala;
use App\Models\users;



class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('Role');
    }
    public function index()
    {
        $reviews=reviews::all();
        // dd($reviews);

        return view('admin.reviews.reviews',compact(['reviews']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products=kala::all();
        $users=users::all();
        return view('admin.reviews.addreviews',compact(['products','users']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment=new reviews;
        $comment->description=$request->description;
        $comment->kala_id=$request->kala;
        $comment->user_id=$request->user;

        $comment->save();

        $reviews=reviews::all();
        // dd($reviews);

        return view('admin.reviews.reviews',compact(['reviews']));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $comment=reviews::findorfail($id);
        // dd($comment->description);
        // dd($comment->Kala->name);
        $products=kala::all();
        $users=users::all();
        return view('admin.reviews.editreviews',compact(['comment','products','users']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->id);
        $id=$request->id;
        $comment=reviews::findorfail($id);
        $comment->description=$request->description;
        $comment->kala_id=$request->kala;
        $comment->user_id=$request->user;

        $comment->save();

        $reviews=reviews::all();
        // dd($reviews);

        return view('admin.reviews.reviews',compact(['reviews']));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviews=reviews::find($id);
        $reviews->delete();
        return redirect('/admin/reviews');
    }
}
