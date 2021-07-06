<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dishub Traffic Light</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/icon/dishub.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/responsive.jqueryui.min.css') }}">

    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
      div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="home"><img src="{{ asset('assets/images/icon/dishub1.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="{{Request::is('/') ? 'active' : null }}">
                              <a href="{{url('/home')}}">
                                <i class="fa fa-dashboard" style="color:#ffffff"></i> <span>Dashboard</span>
                                <span class="pull-right-container"></span>
                              </a>
                            </li>
                            <li>
                                  <li class="treeview">
                                  <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope-o" style="color:#ffffff"></i><span>Menu</span></a>
                                    <ul class="collapse">
                                    <ul class="treeview-menu">
                                      <li class="{{Request::is('/dropdown/dpage1') ? 'active' : null }}"><a href="/jenissuratkeluar"><i class=""></i> Kemacetan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage2') ? 'active' : null }}"><a href="/listsuratkeluar"><i class=""></i> Berita</a></li>
                                      <li class="{{Request::is('/dropdown/dpage3') ? 'active' : null }}"><a href="/statussuratkeluar"><i class=""></i> Analitik</a></li>
                                      <li class="{{Request::is('/dropdown/dpage4') ? 'active' : null }}"><a href="/laporansuratkeluar"><i class=""></i> Display Map</a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </li>
                            <li>
                                  <li class="treeview">
                                  <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-folder" style="color:#ffffff"></i><span>Layanan</span></a>
                                    <ul class="collapse">
                                    <ul class="treeview-menu">
                                      <li class="{{Request::is('/dropdown/dpage5') ? 'active' : null }}"><a href="/submitlaporaninsiden"><i class=""></i> Pelaporan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage6') ? 'active' : null }}"><a href="/listsuratkeluar"><i class=""></i> Persimpangan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage7') ? 'active' : null }}"><a href="/statussuratkeluar"><i class=""></i> Status</a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </li>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

   <div class="main-content">
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Welcome, <strong>{{ Auth::user()->name }}</strong> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                                <a class="dropdown-item" href="{{url('/logout')}}">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
        @yield('content')
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>

    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Start datatable js -->
    <script src="{{ asset('assets/css/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/css/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/css/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/css/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/css/datatables/responsive.bootstrap.min.js') }}"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- start chart js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js') }}"></script> -->
    <!-- start highcharts js -->
    <!-- <script src="https://code.highcharts.com/highcharts.js') }}"></script> -->
    <!-- start zingchart js -->
    <!-- <script src="https://cdn.zingchart.com/zingchart.min.js') }}"></script> -->
    <!-- <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script> -->
    <!-- all line chart activation -->
    <!-- <script src="{{ asset('assets/js/line-chart.js') }}"></script> -->
    <!-- all pie chart -->
    <!-- <script src="{{ asset('assets/js/pie-chart.js') }}"></script> -->
    <!-- others plugins -->
    <!-- <script src="{{ asset('assets/js/plugins.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/scripts.js') }}"></script> -->
</body>

</html>

