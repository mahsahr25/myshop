@extends('Admin.layouts.app1')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        داشبرد
        <small>کنترل پنل</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
        <li class="active">داشبرد</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>سفارش جدید</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>پیوستن به خبرنامه</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope-square"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i> </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>کاربران ثبت شده</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>علاقه مندی جدید</p>
            </div>
            <div class="icon">
              <i class="ion ion-heart"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- <div class="row">
        <section class="col-lg-12 col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-info-circle"></i>
              <h3 class="box-title">قالب AdminLTE فارسی ورژن 2.4.0</h3>
              <!- tools box -->
              <!-- <div class="pull-left box-tools">
                <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div> -->
              <!-- /. tools -->
            <!-- </div>
            <div class="box-body">
              <h5>این قالب به صورت html هست و برای بخش کنترل پنل و مدیریت سایت های مختلف مناسب می باشد.</h5>
              <h5>نسخه اصلی این قالب AdminLTE می باشد که توسط <a href="https://adminlte.io">Almsaeed Studio</a> به صورت رایگان قرار داده شده است.</h5>
              <br><h5><b>ویژگی های قالب و تفاوت های آن با قالب اصلی:</b></h5>
              <h5>۱- قالب به صورت کامل و حرفه ای فارسی و راست چین شده.</h5>
              <h5>۲- انتخاب تاریخ به صورت شمسی یا دیتا پیکر توسط کتاب خانه باباخانی اضافه شده.</h5>
              <h5>۳- ویرایشگر CK Editor فارسی و راست چین شده.</h5>
              <h5>۴- ویرایشگر TinyMCE فارسی و راست چین شده و به قالب اضافه شده.</h5>
              <h5>۵- همچنین فونت فارسی برای خوانایی بیشتر حروف و اعداد فارسی به قالب افزوده شد.</h5>
              <br>
              <h6><b>قالب توسط علیرضا حسینی زاده و به صورت رایگان منتشر شده است.</b></h6>
              <h6><b>برای دانلود قالب و دریافت آپدیت های آن به این <a href="https://github.com/hosseinizadeh/AdminLTE_Persian">وب سایت</a> مراجعه کنید.</b></h6>
            </div>
          </div>
        </section> -->
      <!-- </div>  -->
      <!-- Main row -->
      <div class="row">
        <!-- right col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-left">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">نمودار</a></li>
              <li><a href="#sales-chart" data-toggle="tab">چارت</a></li>
              <li class="pull-right header"><i class="fa fa-inbox"></i> فروش</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          {{-- <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">پیام های جدید</h3>

              <div class="box-tools pull-left" data-toggle="tooltip" title="وضعیت">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box"> --}}
              <!-- chat item -->
              {{-- <div class="item">
                <img src="{{asset('app-assets/dist/img/user4-128x128.jpg')}}" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 2:15</small>
                    نسترن
                  </a>
                  فایل مورد نظر شما
                </p>
                <div class="attachment">
                  <h4>فایل ضمیمه</h4>

                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>

                   <div class="pull-left">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">دانلود</button>
                  </div>
                 </div> --}}
                <!-- /.attachment -->
              {{-- </div> --}}
              <!-- /.item -->
              <!-- chat item -->
              {{-- <div class="item">
                <img src="{{asset('app-assets/dist/img/user3-128x128.jpg')}}" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:15</small>
                    نگین
                  </a>
                  ممنونم
                </p>
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <img src="{{asset('app-assets/dist/img/user2-160x160.jpg')}}" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:30</small>
                    محمد
                  </a>
                  با تشکر از شما
                </p>
              </div> --}}
              <!-- /.item -->
            {{-- </div> --}}
            <!-- /.chat -->
            {{-- <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <!-- <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">لیست کارها</h3>

              <div class="box-tools pull-left">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div> -->
            <!-- /.box-header -->
            <!-- <div class="box-body"> -->
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <!-- <ul class="todo-list">
                <li>
                  <!- drag handle -->
                  {{-- <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i> --}}
                      <!-- </span>  -->
                  <!-- checkbox -->
                  <!-- <input type="checkbox" value=""> -->
                  <!-- todo text -->
                  <!-- <span class="text">ساخت قالب</span> -->
                  <!-- Emphasis label -->
                  <!-- <small class="label label-danger"><i class="fa fa-clock-o"></i> ۲ دقیقه</small> -->
                  <!-- General tools such as edit or delete-->
                  <!-- <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">بهینه سازی قالب سایت</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> ۴ ساعت</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">ایجاد صفحه فرود سایت</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> ۱ روز</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">تبلیغات سایت</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> ۳ روز</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">بررسی اعلان ها</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> ۱ هفته</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">طراحی سیستم جدید</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> ۲ ماه</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div> -->
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> جدید</button>
            </div>
          </div> -->
          <!-- /.box -->

          <!-- quick email widget -->
          {{-- <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">ایمیل</h3>
              <!-- tools box -->
              <div class="pull-left box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="ایمیل">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="موضوع">
                </div>
                <div>
                  <textarea class="textarea" placeholder="متن ایمیل"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-left btn btn-default" id="sendEmail">ارسال
                <i class="fa fa-arrow-circle-left"></i></button>
            </div>
          </div>
        </section> --}}
    </section>

        <!-- /.right col -->
        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-left box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-left" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-left" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-left: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                بازدید ها
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">بازدید ها</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">آنلاین</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">فعال</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">نمودار فروش</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="knob-label">سفارش ایمیلی</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="knob-label">سفارش آنلاین</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="knob-label">سفارش فیزیکی</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">تقویم</h3>
              <!-- tools box -->
              <div class="pull-left box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
                    <li><a href="#">رویداد تازه</a></li>
                    <li><a href="#">حذف رویدادها</a></li>
                    <li class="divider"></li>
                    <li><a href="#">نمایش تقویم</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  {{-- <div class="clearfix">
                    <span class="pull-right">نمایشگاه</span>
                    <small class="pull-left">90%</small>
                  </div> --}}
                  {{-- <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div> --}}

                  {{-- <div class="clearfix">
                    <span class="pull-right">کمپین ۳۰ درصد</span>
                    <small class="pull-left">70%</small>
                  </div> --}}
                  {{-- <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div> --}}
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  {{-- <div class="clearfix">
                    <span class="pull-right">کمپین ایمیل</span>
                    <small class="pull-left">60%</small>
                  </div> --}}
                  {{-- <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div> --}}

                  {{-- <div class="clearfix">
                    <span class="pull-right">کمپین تجارت الکترونیک</span>
                    <small class="pull-left">40%</small>
                  </div> --}}
                  {{-- <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div> --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer text-left">  -->
    <!-- <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a href="http://hosseinizadeh.ir/adminlte">Alireza Hosseinizadeh</a></strong> -->
  <!-- </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">فعالیت ها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">تولد غلوم</h4>

                <p>۲۴ مرداد</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">آپدیت پروفایل سجاد</h4>

                <p>تلفن جدید (800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">نورا به خبرنامه پیوست</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">کرون جابز اجرا شد</h4>

                <p>۵ ثانیه پیش</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">پیشرفت کارها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                ساخت پوستر های تبلیغاتی
                <span class="label label-danger pull-left">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                آپدیت رزومه
                <span class="label label-success pull-left">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                آپدیت لاراول
                <span class="label label-warning pull-left">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                بخش پشتیبانی سایت
                <span class="label label-primary pull-left">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">وضعیت</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              گزارش کنترلر پنل
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              ثبت تمامی فعالیت های مدیران
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              ایمیل مارکتینگ
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              اجازه به کاربران برای ارسال ایمیل
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              در دست تعمیرات
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              قرار دادن سایت در حالت در دست تعمیرات
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">تنظیمات گفتگوها</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              آنلاین بودن من را نشان نده
              <input type="checkbox" class="pull-left" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              اعلان ها
              <input type="checkbox" class="pull-left">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              حذف تاریخته گفتگوهای من
              <a href="javascript:void(0)" class="text-red pull-left"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('Admin/app-assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('Admin/app-assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('Admin/app-assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('Admin/app-assets/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('Admin/app-assets/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('Admin/app-assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('Admin/app-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('Admin/app-assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('Admin/app-assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('Admin/app-assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('Admin/app-assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('Admin/app-assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('Admin/app-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('Admin/app-assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('Admin/app-assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/app-assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/app-assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/app-assets/dist/js/demo.js')}}"></script>
</body>
</html>
@endsection
