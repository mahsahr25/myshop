
@extends('layouts.member_app')


@section('content')
<!--================Login Box Area =================-->
<section class="login_box_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{asset('app-assets/img/login.jpg')}}" alt="">
                    <div class="hover">
                        <h4>پروفایل کاربری شما</h4>
                        {{-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> --}}
                        {{-- <a class="main_btn" href="#">Create an Account</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner reg_form">
                    <h3>تکمیل حساب کاربری</h3>
                    @if(Session::has('msg'))
                    <p class="alert alert-info">{{Session::get('msg')}}</p>
                    @endif
                    <form class="row login_form" action="{{route('edit_account')}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <input type="hidden" name="id"   @if(Auth::user()->id!==null) value="{{Auth::user()->id}}" @endif>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" @if(Auth::user()->name!==null)  placeholder="{{Auth::user()->name}}"
                            value="{{Auth::user()->name}}" @endif>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="username" @if(Auth::user()->username!==null) placeholder="{{Auth::user()->username}}"
                            value="{{Auth::user()->username}}"
                            @else placeholder="نام کاربری" @endif>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" @if(Auth::user()->email!==null) placeholder="{{Auth::user()->email}}"
                            value="{{Auth::user()->email}}"
                            @else placeholder="ایمیل" @endif>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="password" name="mobile" @if(Auth::user()->mobile!==null) placeholder="{{Auth::user()->mobile}}"
                            value="{{Auth::user()->mobile}}"
                            @else placeholder="شماره همراه" @endif>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="تکرار رمز عبور">
                        </div>
                        <div class="col-md-12 form-group">
                            <p style="font-size:1.3em;">جنسیت:</p><br>
                            مرد<input type="radio" name="gender"  value="2" >
                            زن<input type="radio" name="gender"  value="1">
                    </div>
                    <br><br>
                    <div class="col-md-12 form-group">
                            <p style="font-size:1.3em;">عکس:</p><br>

                            <input type="file" class="form-control" id="image" name="image" >
                        </div>


                        {{-- <div class="col-md-12 form-group"> --}}
                            {{-- <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Keep me logged in</label>
                            </div> --}}
                        {{-- </div> --}}
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="btn submit_btn">ویرایش</button>
                            <br>
                        </div>
                    </form>
                    <div>
                            <button type="submit" value="submit" class="btn submit_btn"><a href="delete_account" style="color:rgb(255,255,255)">حذف حساب کاربری</a></button>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection
