@extends('layouts.member_app')
@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                {{-- <h2>Order Confirmation</h2> --}}
                {{-- <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="confirmation.html">Confirmation</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Order Details Area =================-->
<section class="order_details p_120">
    <div class="container">
        <h3 class="title_confirmation">از خرید شما سپاسگزاریم</h3>
        <div class="row order_d_inner">
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>اطلاعات سفارش</h4>
                    <ul class="list">
                        <li>
                            <a href="#">
                                <span>شماره سفارش</span> : 60235</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>تاریخ</span> </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Total</span> : USD 2210</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>نحوه پرداخت</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="details_item">
                    <h4>Billing Address</h4>
                    <ul class="list">
                        <li>
                            <a href="#">
                                <span>Street</span> : 56/8</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>City</span> : Los Angeles</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Country</span> : United States</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Postcode </span> : 36952</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>آدرس</h4>
                    <ul class="list">
                        <li>
                            <a href="#">
                                <span>Street</span> : 56/8</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>City</span> : Los Angeles</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Country</span> : United States</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Postcode </span> : 36952</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="order_details_table">
            <h2>سفارش</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">محصول</th>
                            <th scope="col">تعداد</th>
                            <th scope="col">کل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Pixelstore fresh Blackberry</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>$720.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Pixelstore fresh Blackberry</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>$720.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Pixelstore fresh Blackberry</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>$720.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>قیمت کل</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>$2160.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>هزینه ارسال</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Flat rate: $50.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>مجموع</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>$2210.00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group"  style="margin-left:30vw;">
        <button type="submit" value="submit" class="btn submit_btn">پرداخت</button>
        {{-- <a href="#">Forgot Password?</a> --}}
    </div>
</section>
<!--================End Order Details Area =================-->


@endsection
