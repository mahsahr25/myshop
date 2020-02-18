@extends('layouts.app1')
@section('content')
<!--================Login Box Area =================-->
<section class="login_box_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{asset('app-assets/img/login.jpg')}}" alt="">
                    {{-- <div class="hover">
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        <a class="main_btn" href="#">Create an Account</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner reg_form">
                    <h3>ثبت نام</h3>
                    <form class="row login_form" action="{{ route('register') }}" method="post" id="contactForm" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder=" نام و نام خانوادگی">

                            {{-- <div class="col-md-6"> --}}
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}

                                @if($errors->any())
                                <p>{{$errors->first('name')}}</p>
                                @endif
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            {{-- </div> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل">
                            @if($errors->any())
                            <p>{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور">
                            @if($errors->any())
                            <p>{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="تکرار رمز عبور">

                        </div>
                        <div class="col-md-12 form-group">
                            {{-- <div class="creat_account"> --}}
                                {{-- <input type="checkbox" id="f-option2" name="selector"> --}}
                                {{-- <label for="f-option2">Keep me logged in</label> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="btn submit_btn">ثبت نام</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection
