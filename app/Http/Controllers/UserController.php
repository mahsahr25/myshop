<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\images;
use App\Models\photos;
use App\User;



class UserController extends Controller
{
    //
    public function login_index()
{
return view('users.login');
}

// public function login()
// {dd('no');
// return view('home.members_home');
// }

public function register_index()
{
return view('users.register');
}

public function register()
{
    // dd('hi');
return view('home.members_home');

}



public function account(){
        return view('users.account');
    }



    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */

public function edit_account(Request $request){
    $id=$request->get('id');
    // dd($id);
    // dd($request->get('name'));

        // $request->validate([
        //     'email'=>'required|email|unique:users,email,'.$id,
        //     'username'=>'nullable|string|alpha_dash|unique:users,username,'.$id,
        //     'name'=>'required|unique:users,name,'.$id,
        //     'mobile'=>'nullable|regex:/(01)[0-9]{9}/',


        // ]);
        $user=User::find($id);
        // dd($user);

        $user->name=$request->get('name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->gender=$request->get('gender');
        $user->mobile=$request->get('mobile');

        $user->save();
        $fileimage=$request->file('image');

        if($fileimage){
            $imagename=$fileimage->getClientOriginalName();
        $fileimage->move('app-assets/img/post',$imagename);
    //     $image = new Images();
    // $image->imagename = $imagename;
    // $user->images()->save($image);

    $photo=new Photos();
    $photo->name=$imagename;
    $user->photos()->save($photo);
        }

$request->session()->flash('msg','اطلاعات شما با موفقیت ویرایش شد');

        return view('users.account');
        // return redirect('home.members_home');

        // return view('home');

    }

    public function delete_account(){
        // return view('home.members_home');
        // return view('home');
        return redirect('/home');

    }
    public function logout()
{
return redirect('/home');

}

public function user_favorite(){
    return view('kala.favoritelist');

}
public function user_favorite_show(){
    return view('kala.favoritelist');
}
}
