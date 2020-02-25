<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\users;
use App\Models\gender;
use App\Models\photos;
use App\Models\reviews;
use App\User;



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
        $this->middleware('Role');
    }

    public function index(){
        $users=User::all();

        // $user=users::with('Reviews')->get();
        $user=User::findorfail(24);
        // dd($user['name']);
        // $photos=$user->photos()->get();
        // dd($photos[0]['name']);
        // foreach($photos as $photo)
        // dd($photo->name);
        // $review=reviews::find(28);
        // foreach($user->photos as $p)
        // foreach($user->reviews as $rev)
        // dd($review);
        // dd($photo->Kala);

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
        $gender=gender::all();
        return view('admin.users.adduser',compact(['gender']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->gender);
        $request->validate([
            'email'=>'required|email|unique:users,email',
            'username'=>'nullable|string|alpha_dash|unique:users,username',

            'name'=>'required|string|alpha_dash|unique:users,name',
            'password'=>'required|string|min:8'



        ]);



        $user=new users;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->gender=$request->gender;
        $user->save();

        $users=users::all();

        return view('admin.users.users',compact(['users']));




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

        $user=users::find($id);
        // dd($data->Gender[0]->id);
        $gender=gender::all();

        // dd($data);
        return view('admin.users.edituser',compact('user','gender'));
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

        $request->validate([
            'email'=>'required|email|unique:users,email,'.$id,
            'username'=>'nullable|string|alpha_dash|unique:users,username,'.$id,
            'name'=>'required|unique:users,name,'.$id,


        ]);


        // dd($request->file('imagefile'));


        // dd($id);
        $user=users::find($id);
        // dd($kala);
        $user->name=$request->get('name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->gender=$request->get('gender');
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
        $user=users::findorfail($id);
        // dd($user);
        // dd($user->email);
        // dd(Auth()->user()->email);

        // $user->delete();
        if(Auth()->user()->email==$user->email){
            // dd('yes');
            $alert= "You can't delete this account";
        return redirect('/admin/users')->with('alert',$alert);

        }else{
            // dd('no');
        $user->delete();
        return redirect('/admin/users');


        }

    }
}
