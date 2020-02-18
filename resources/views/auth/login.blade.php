@extends('layouts.app1')
@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                {{-- <h2>Login/Register</h2> --}}
                {{-- <div class="page_link">
                    <a href="home">Home</a>
                    <a href="login">Login</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Login Box Area =================-->
<section class="login_box_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{asset('app-assets/img/login.jpg')}}" alt="">
                    <div class="hover">
                        <h4>کاربر جدید هستید؟</h4>
                        {{-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> --}}
                        <a class="main_btn" href="register">ثبت نام</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>ورود</h3>
                    <form class="row login_form" action="{{ route('login') }}" method="post" id="contactForm" novalidate="novalidate" >
{{ csrf_field() }}
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  placeholder="ایمیل"  required autocomplete="email" autofocus >
                            {{-- <div class="col-md-6"> --}}
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="رمز عبور" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            {{-- <div class="creat_account"> --}}
                                {{-- <input type="checkbox" id="f-option2" name="selector"> --}}
                                {{-- <label for="f-option2">Keep me logged in</label> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="btn submit_btn">ورود</button>
                            {{-- <a href="#">Forgot Password?</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

<!--================ Subscription Area ================-->
{{-- <section class="subscription-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Subscribe for Our Newsletter</h2>
                    <span>We won’t send any kind of spam</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div id="mc_embed_signup">
                    <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
                     method="get" class="subscription relative">
                        <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                         required="">
                        <!-- <div style="position: absolute; left: -5000px;">
                                <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                            </div> -->
                        <button type="submit" class="newsl-btn">Get Started</button>
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================ End Subscription Area ================-->
@endsection
