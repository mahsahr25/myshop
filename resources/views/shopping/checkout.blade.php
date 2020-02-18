@extends('layouts.app1')
@section('content')
<!--================Home Banner Area =================-->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner_content text-center">
                {{-- <h2>Product Checkout</h2> --}}
                {{-- <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="checkout.html">Checkout</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="returning_customer">
            <div class="check_title">
                <h3 style="padding-left:5vw;">لطفا ابتدا وارد شوید
                    {{-- <a href="#">Click here to login</a> --}}
                </h3>
            </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        {{-- <h3>Log in to enter</h3> --}}
                        <form class="row login_form" action="confirmation" method="post" id="contactForm" novalidate="novalidate">
    {{ csrf_field() }}
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="نام کاربری">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="رمز عبور">
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
<br>
                        <div class="hover">
                            {{-- <h4>New to our website?</h4> --}}
                            {{-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> --}}
                            <a class="main_btn" href="register_index">ثبت نام</a>
                            <br>
                        </div>
                        <br>

                    </div>
                </div>
            </div>

        </div>

            </section>
@endsection

