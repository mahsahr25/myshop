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
                {{-- <h2>Shop Category Page</h2>
                <div class="page_link">
                    <a href="home">Home</a>
                    <a href="category">Category</a> --}}
                    {{-- <a href="category.html">Women Fashion</a> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_gap">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                {{-- <div class="product_top_bar"> --}}
                    {{-- <div class="left_dorp"> --}}
                        {{-- <select class="sorting">
                            <option value="1">Default sorting</option>
                            <option value="2">Default sorting 01</option>
                            <option value="4">Default sorting 02</option>
                        </select> --}}
                        {{-- <select class="show">
                            <option value="1">Show 12</option>
                            <option value="2">Show 14</option>
                            <option value="4">Show 16</option>
                        </select>
                    </div> --}}
                    {{-- <div class="right_page ml-auto">
                        <nav class="cat_page" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item blank">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">6</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                {{-- </div> --}}
                <div class="latest_product_inner row">
                @foreach($product as $pro)

                    <div class="col-lg-3 col-md-3 col-sm-6">
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
                                <h4>{{$pro['name']}}</h4>
                            </a>
                            <h5>{{$pro['price']}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                    {{-- <div class="col-lg-3 col-md-3 col-sm-6">
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
                    <div class="col-lg-3 col-md-3 col-sm-6">
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
                    <div class="col-lg-3 col-md-3 col-sm-6">
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
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f_p_item">
                            <div class="f_p_img">
                                <img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
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
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f_p_item">
                            <div class="f_p_img">
                                <img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
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
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f_p_item">
                            <div class="f_p_img">
                                <img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
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
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f_p_item">
                            <div class="f_p_img">
                                <img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
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
                </div>
            </div> --}}
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets cat_widgets">
                        {{-- <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="category_product">bag</a>
                                </li>
                                <li>
                                    <a href="category_product">shoes</a> --}}
                                    {{-- <ul class="list">
                                        <li>
                                            <a href="#">Frozen Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Dried Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Fresh Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cooking</a>
                                    <ul class="list">
                                        <li>
                                            <a href="#">Frozen Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Dried Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Fresh Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Beverages</a>
                                    <ul class="list">
                                        <li>
                                            <a href="#">Frozen Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Dried Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Fresh Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home and Cleaning</a>
                                </li>
                            </ul> --}}
                        {{-- </ul>
                        </div>
                    {{-- </aside> --}}
                    </aside>
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>فیلتر برند</h3>
                        </div>
                        <div class="widgets_inner">
                            <h4>برند</h4>
                            <ul class="list">
                                {{-- <li>
                                    <a href="#">Apple</a>
                                </li> --}}
                                <li>
                                    <a href="brand_category">Clarks</a>
                                </li>
                                <li class="active">
                                    <a href="brand_category">Michael Kors</a>
                                </li>
                                <li >
                                    <a href="brand_category">Nike</a>
                                </li>
                                {{-- <li>
                                    <a href="#">Micromax</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="#">Samsung</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="widgets_inner">
                            <h4>رنگ</h4>
                            <ul class="list">
                                <li>
                                    <a href="category">مشکی</a>
                                </li>
                                <li>
                                    <a href="category">قهوه ای</a>
                                </li>
                                <li class="active">
                                    <a href="category">کرم</a>
                                </li>
                                {{-- <li>
                                    <a href="#">Gold</a>
                                </li>
                                <li>
                                    <a href="#">Spacegrey</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="widgets_inner">
                            <h4>قیمت</h4>
                            <div class="range_item">
                                <div id="slider-range"></div>
                                <div class="row m0">
                                    <form action="price_category">
                                            <label for="amount">قیمت : </label>
                                            <input type="text" id="amount" readonly>
                                            <input type="range" name="price" min="0" max="10" id="amount"><br>
                                            <input type="submit" value="اعمال فیلتر">
                                    </form>



                                </div>
                            </div>
                        </div>
                    </aside>
                {{-- </div> --}}
            </div>
        </div>
            </div>
        </div>

        {{-- {{-- <div class="row"> --}}
                {{-- <div class="row">
            <nav class="cat_page mx-auto" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                    </li> --}}
                    {{-- <li class="page-item active">
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
                    </li> --}}
                {{-- </ul> --}}
            {{-- </nav> --}}
        {{-- </div>  --}}
    </div>
</section>
<!--================End Category Product Area =================-->
{{-- @include('layouts.includes.footer') --}}
@endsection
