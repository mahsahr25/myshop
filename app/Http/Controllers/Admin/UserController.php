<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\users;

use DataTables;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users=users::all();

        return view('admin.users.users',compact(['users']));
    }




    public function ajaxindex()
    {
        //
        // dd('hi');
        $users=User::all();
        return view('users.ajaxall');
    }

    public function alluserdatatables(Request $request){
        $users=User::all();
        return DataTables()->of($users)
        ->addColumn('action',function($user)
        {
            $button='&nbsp;&nbsp;&nbsp;<button type="button" name="delete"
            id="'.$user->id.'" class="delete btn btn-danger btn-sm">Delete</button> ';
            return $button;
        })
        ->rawColumns(['action'])
        ->make(true);

        return view('users_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=users::find($id);
        // dd($data);
        return view('admin.users.edituser')->with('user',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {
        // dd($request->get('name'));
        //
        $id=$request->get('id');
        // dd($request->file('imagefile'));


        // dd($id);
        $user=users::find($id);
        // dd($kala);
        $user->name=$request->get('name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->save();

        $users=users::all();
        return view('admin.users.users',compact(['users']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=users::find($id);
        // dd($user);
        $user->delete();
        return redirect('/admin/users');
    }
}
