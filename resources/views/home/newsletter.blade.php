
{{-- @if( Auth::user()->name ) --}}
{{-- @extends('layouts.member_app') --}}
{{-- @else --}}
@extends('layouts.app1')
{{-- @endif --}}
@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Newsletter Confirmation</h2>
                    {{-- <div class="page_link"> --}}
                        {{-- <a href="home">Home</a> --}}
                        {{-- <a href="login">best-selling</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--================Home Banner Area =================-->
{{-- <section class="home_banner_area">
    <div class="overlay"></div>
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="offset-lg-2 col-lg-8">
                    <h3>Fashion for
                        <br />Upcoming Winter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a class="white_bg_btn" href="#">View Collection</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================End Home Banner Area =================-->

<!--================Hot Deals Area =================-->
{{-- <section class="hot_deals_area section_gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="{{asset('app-assets/img/product/hot_deals/deal1.jpg')}}" alt="">
                    <div class="content">
                        <h2>Promotions</h2>
                        <a href=""><p>shop now</p></a>
                    </div>
                    <a class="hot_deal_link" href="#"></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="{{asset('app-assets/img/product/hot_deals/deal1.jpg')}}" alt="">
                    <div class="content">
                        <h2>Best-Selling</h2>

                    </div>
                    <a class="hot_deal_link" href="#"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Hot Deals Area =================-->

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
</section> --}}
<!--================End Clients Logo Area =================-->

<!--================Feature Product Area =================-->
{{-- <section class="feature_product_area section_gap">
    <div class="main_box">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>best-selling Products</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
            <div class="row">
                <div class="col col1">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-1.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="#">
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
                <div class="col col2">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="{{asset('app-assets/img/product/feature-product/f-p-2.jpg')}}" alt="">
                            <div class="p_icon">
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
            </div>

            <div class="row">
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
            </div>
        </div>
    </div>
</section> --}}
<!--================End Feature Product Area =================-->

<!--================ Subscription Area ================-->
<section class="subscription-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Thanks,your e-mail has been received</h2>
                    <span>We won’t send any kind of spam</span>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center">
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
        </div> --}}
    </div>
</section>
<!--================ End Subscription Area ================-->

@endsection


