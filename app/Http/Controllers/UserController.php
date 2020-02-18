<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function edit_account(){
        return view('home.members_home');
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
