{{-- @if( Auth::user()->name ) --}}
{{-- @extends('layouts.member_app') --}}
{{-- @else --}}
{{-- @extends('layouts.app1') --}}
@extends('layouts.member_app')
{{--  --}}
{{-- @endif --}}
@section('content')

<!-- Slideshow Start-->

{{-- <div class="row">
    <div class="col-lg-8">
      <div class="slideshow single-slider owl-carousel">
        <div class="item active"> <a href="#"><img class="img-responsive" src="{{asset('app-assets/img/product/hot_deals/pro3.jpg')}}" alt="banner 1" /></a></div>
        <div class="item"> <a href="#"><img class="img-responsive" src="{{asset('app-assets/img/product/hot_deals/best1.jpg')}}" alt="banner 2" /></a></div>
        <div class="item"> <a href="#"><img class="img-responsive" src="{{asset('app-assets/img/clients-logo/c-logo-1.png')}}" alt="banner 3" /></a></div>
      </div>
    </div>
</div> --}}



<div class="row"  style="margin-top:30px;background-color:rgb(250,235,215);">
        <div class="col-lg-2"></div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade col-lg-8 " data-ride="carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('app-assets/img/slider/w6.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('app-assets/img/slider/c3.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('app-assets/img/slider/m2.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
    </div>

</div>
     <!-- Slideshow End-->


{{-- drop-left --}}

     {{-- <div  style="margin-top:30px;font-size:36px;position:fixed;z-index:1000;top:100px;">
        <div class="btn-group dropleft"  >
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              پیشنهاد جذاب
            </button>
            <div class="dropdown-menu">

                  <img src="{{asset('app-assets/img/slider/w3.jpg')}}" alt=""  >
            </div>
          </div>
     </div> --}}


<!--================Home Banner Area =================-->
{{-- <section class="home_banner_area">
    <div class="overlay"></div>
    <div class="banner_inner d-flex align-items-center">
        <div class="container"> --}}
                {{-- @if(\Session::has('confirm'))
                <h2 style="color:blue;">{{\Session::get('confirm')}}</h2>
                @endif --}}
            {{-- <div class="banner_content row">
                <div class="offset-lg-2 col-lg-8"> --}}
                    {{-- <h3>فشن
                        <br />برای همه</h3> --}}
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> --}}
                    {{-- <a class="white_bg_btn" href="new_product">محصولات جدید</a> --}}
                    {{-- <p>{{ Auth::user()->name }}</p> --}}


                {{-- </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================End Home Banner Area =================-->

<!--================Hot Deals Area =================-->
<section class="hot_deals_area section_gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="{{asset('app-assets/img/product/hot_deals/pro3.jpg')}}" alt="">
                    <div class="content">
                        <h1>تخفیف ها</h1>
                        <p>خرید</p>
                    <a class="hot_deal_link" href="promotion"></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="{{asset('app-assets/img/product/hot_deals/best1.jpg')}}" alt="">
                    <div class="content">
                        <h1>پرفروش ها</h1>
                        <p>خرید</p>
                    <a class="hot_deal_link" href="best_selling"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Hot Deals Area =================-->
{{-- second slider --}}
<section id="demos" >

        <div class="main_title">
                <h3>پیشنهاد ما </h3>
            </div>
    <div class="row"  >


        <div  class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="owl-carousel owl-theme  me" style="display:block !important;overflow-x: hidden">
                <div class="item">
                    <h4>

                        <a href="new_product"><img class="img-responsive"   src="{{asset('app-assets/img/slider/w1.jpg')}}" alt="New york"></a>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <a href="new_product"><img class="img-responsive"   src="{{asset('app-assets/img/slider/men.jpg')}}" alt="Chicago"></a>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <a href="new_product"><img class="img-responsive"   src="{{asset('app-assets/img/slider/c2.jpg')}}" alt="Los Angeles"></a>
                    </h4>
                </div>
                <div class="item">
                    <h4>

                        <a href="new_product"><img class="img-responsive"   src="{{asset('app-assets/img/slider/w2.jpg')}}" alt="Los Angeles"> </a>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <a href="new_product"><img class="img-responsive"   src="{{asset('app-assets/img/slider/w4.jpg')}}" alt="Los Angeles"></a>
                    </h4>
                </div>

            </div>
        </div>
    </div>
</section>





<!--================Clients Logo Area =================-->
<section class="clients_logo_area">
    <div class="container-fluid">
        <div class="clients_slider owl-carousel">
            <div class="item">
                <img src="{{asset('app-assets/img/clients-logo/c-logo-1.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('app-assets/img/clients-logo/c-logo-2.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('app-assets/img/clients-logo/c-logo-3.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('app-assets/img/clients-logo/c-logo-4.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('app-assets/img/clients-logo/c-logo-5.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End Clients Logo Area =================-->

<!--================Feature Product Area =================-->
<section class="feature_product_area section_gap">
    <div class="main_box">
        <div class="container-fluid">
            <div class="row"  style="padding-top:50px;">
                <div class="main_title">
                    <h3>تازه ها</h3>
                    {{-- <p>Who are in extremely love with eco friendly system.</p> --}}
                </div>
            </div>
            <div class="row">
            @foreach($products as $product)

                <div class="col col1">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{isset($product->images[0]->imagename) ? $product->images[0]->imagename : null }}" alt="" style="height:100px;">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="add_to_cart">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="single_product">
                            <h4>{{$product->name}}</h4>
                        </a>
                        <h5>{{$product->price}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
                {{-- <div class="col col2">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-2.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>
                <div class="col col3">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-3.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>
                <div class="col col4">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-4.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>
                <div class="col col5">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-5.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>

                <div class="col col6">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-5.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>

                <div class="col col7">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-4.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>

                <div class="col col8">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-5.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>
                <div class="col col9">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-1.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>
                <div class="col col10">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-4.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="user_favorite">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>Long Sleeve TShirt</h4>
                        </a>
                        <h5>$150.00</h5>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row">
                <nav class="cat_page mx-auto" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">01</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">02</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">03</a>
                        </li>
                        <li class="page-item blank">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">09</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> --}}
        </div>
    </div>
</section>
<!--================End Feature Product Area =================-->

<!--================ Subscription Area ================-->
<section class="subscription-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>خبرنامه</h2>
                    <span>برای آگاهی از آخرین اخبار عضو خبرنامه ما شوید</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div >
                    <form   action={{"newsletter_confirm"}}
                     method="post" class="subscription relative">
                     {{ csrf_field() }}


                        <input type="text" name="EMAIL" placeholder="ایمیل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ایمیل'"
                         required="">
                     <button type="submit" class="newsl-btn">عضویت</button>

                        <!-- <div style="position: absolute; left: -5000px;">
                            <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                        </div> -->
                        {{-- <button type="submit" value="submit" class="btn submit_btn newsl-btn">Log In</button> --}}

                        {{-- <input type="submit" class="newsl-btn" value="Get Started"> --}}
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Subscription Area ================-->

@endsection
