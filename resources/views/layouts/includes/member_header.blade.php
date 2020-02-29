<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('app-assets/img/favicon.png')}}" type="image/png">
	<title>My Shop</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('app-assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/css/bootstrap-v4-rtl-master/bootstrap-rtl.css')}}">

	<link rel="stylesheet" href="{{asset('app-assets/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/jquery-ui/jquery-ui.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('app-assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/css/responsive.css')}}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>شماره تماس: 012 44 5698 7456 896</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
                            @if(Auth::check())
                            <p>
                                    {{-- سلام <b> مهمان</b> --}}
                                    سلام  <b>{{ Auth::user()->name }} </b>
                                </p>
                             @else
							<a href="{{ route('login') }}">
								ورود/ثبت نام
                            </a>
                            @endif

                        </li>
                        @if(Auth::check() && count(Auth::user()->photos)!=0)
                        {{-- @if(count(Auth::user()->photos)!=0) --}}
                        {{-- @if(Auth::user()->photos[0]->name!==null) --}}
                        {{-- <p>{{count(Auth::user()->photos)}}</p> --}}

                        <li>
                        <img src="{{Auth::user()->photos[0]['name']}}" alt="" style="height:30px;width:30px;">

                        </li>
                        {{-- @endif --}}
                        {{-- @endif --}}

                        @endif

                        @if(Auth::check())
						<li>
							<a href="account">
								حساب کاربری
							</a>
                        </li>
                        @endif
						<li style="margin-right:10px;">
							<a href="contact">
								تماس با ما
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="member_home">
						<img src="{{asset('app-assets/img/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="{{route('home')}}">خانه</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">زنانه</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category">اسپرت</a>
												{{-- <li class="nav-item"> --}}
													{{-- <a class="nav-link" href="single-product.html">Product Details</a> --}}
													{{-- <li class="nav-item"> --}}
														{{-- <a class="nav-link" href="checkout.html">Product Checkout</a> --}}
														<li class="nav-item">
															<a class="nav-link" href="cart.html">بوت</a>
														</li>
														{{-- <li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li> --}}
										</ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">مردانه</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category">ورزشی</a>
												{{-- <li class="nav-item"> --}}
													{{-- <a class="nav-link" href="single-product.html">Product Details</a> --}}
													{{-- <li class="nav-item"> --}}
														{{-- <a class="nav-link" href="checkout.html">Product Checkout</a> --}}
														<li class="nav-item">
															<a class="nav-link" href="cart.html">رسمی</a>
														</li>
														{{-- <li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li> --}}
										</ul>
									</li>
									{{-- <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فروشگاه</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category">Shop Category</a>
												{{-- <li class="nav-item"> --}}
													{{-- <a class="nav-link" href="single-product.html">Product Details</a> --}}
													{{-- <li class="nav-item"> --}}
														{{-- <a class="nav-link" href="checkout.html">Product Checkout</a> --}}
														{{-- <li class="nav-item">
															<a class="nav-link" href="cart.html">Shopping Cart</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li>
										</ul>
									</li>  --}}
									{{-- <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="blog.html">Blog</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="single-blog.html">Blog Details</a>
											</li>
										</ul>
									</li> --}}

                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">برندها</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
                                                <a class="nav-link" href="category">Clarks</a>
                                            </li>
												{{-- <li class="nav-item"> --}}
													{{-- <a class="nav-link" href="single-product.html">Product Details</a> --}}
													{{-- <li class="nav-item"> --}}
														{{-- <a class="nav-link" href="checkout.html">Product Checkout</a> --}}
														<li class="nav-item">
															<a class="nav-link" href="cart.html">Michael Kors</a>
                                                        </li>
                                                        <li class="nav-item">
															<a class="nav-link" href="cart.html">Nike</a>
														</li>
														{{-- <li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li> --}}
										</ul>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="promotion"  >تخفیف ها</a>
                                    </li>

                                    <li class="nav-item submenu dropdown"  style="margin-right:30px">
                                        <a href="tracking_view" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">پیگیری خرید</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                {{-- <a class="nav-link" href={{"login_index"}}>Login</a> --}}
                                                <li class="nav-item">
                                                    <a class="nav-link" href="tracking_view">پیگیری</a>
                                                    {{-- <li class="nav-item">
                                                        {{-- <a class="nav-link" href="elements.html">Elements</a> --}}
                                                    </li>
                                        </ul>
                                    </li>
                                </ul>

							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="search_item" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

                                    <hr>
                            @if(Auth::check())


									<li class="nav-item  submenu dropdown">
										<a href="account" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                        <a class="nav-link" href="account">حساب کاربری</a>


                                                </li>
                                            <li class="nav-item">
                                                    <a class="nav-link" href="cart">خریدهای من</a>


                                            </li>
                                            <li class="nav-item">
                                                    {{-- <a class="nav-link" href="home">خروج</a> --}}
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                            </li>
                                        </ul>
									</li>

									<hr>

									<li class="nav-item">
										<a href="user_favorite" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

                                    <hr>
                                    @endif

									<li class="nav-item">
										<a href="cart" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
