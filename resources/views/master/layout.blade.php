<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dishub Traffic Light</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/icon/favicon.ico') }}">
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
                    <a href="dashboard"><img src="{{ asset('assets/images/icon/dishub.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="{{Request::is('/') ? 'active' : null }}">
                              <a href="{{url('/dashboard')}}">
                                <i class="fa fa-dashboard" style="color:#ffffff"></i> <span>Dashboard</span>
                                <span class="pull-right-container"></span>
                              </a>
                            </li>
                            <li class="{{Request::is('/') ? 'active' : null }}">
                              <a href="{{url('/instansi')}}">
                                <i class="fa fa-building-o" style="color:#ffffff"></i>
                                <span>Instansi Rekanan</span>
                              </a>
                            </li>
                            <li class="{{Request::is('/') ? 'active' : null }}">
                              <a href="{{url('/divisi')}}">
                                <i class="fa fa-paper-plane" style="color:#ffffff"></i>
                                <span>Divisi</span>
                              </a>
                            </li>
                            <li>
                              <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope-o" style="color:#ffffff"></i><span>Surat Menyurat</span></a>
                                <ul class="collapse">
                                  <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o" style="color:#ffffff"></i>Surat Keluar</a>
                                    <ul class="treeview-menu">
                                      <li class="{{Request::is('/dropdown/dpage1') ? 'active' : null }}"><a href="/jenissuratkeluar"><i class=""></i> Jenis Surat Keluar</a></li>
                                      <li class="{{Request::is('/dropdown/dpage2') ? 'active' : null }}"><a href="/listsuratkeluar"><i class=""></i> List Surat Keluar</a></li>
                                      <li class="{{Request::is('/dropdown/dpage3') ? 'active' : null }}"><a href="/statussuratkeluar"><i class=""></i> Status Surat Keluar</a></li>
                                      <li class="{{Request::is('/dropdown/dpage4') ? 'active' : null }}"><a href="/laporansuratkeluar"><i class=""></i> Laporan</a></li>
                                    </ul>
                                  </li>
                                  <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o" style="color:#ffffff"></i>Surat Masuk</a>
                                    <ul class="treeview-menu">
                                      <li class="{{Request::is('/dropdown/dpage5') ? 'active' : null }}"><a href="/listsuratmasuk"><i class=""></i> List Surat Masuk</a></li>
                                      <li class="{{Request::is('/dropdown/dpage6') ? 'active' : null }}"><a href="/statussuratmasuk"><i class=""></i> Status Surat Masuk</a></li>
                                      <li class="{{Request::is('/dropdown/dpage7') ? 'active' : null }}"><a href="/laporansuratmasuk"><i class=""></i> Laporan</a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </li>
                            <li>
                              <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-folder" style="color:#ffffff"></i><span>Penagihan</span></a>
                                <ul class="collapse">
                                  <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o" style="color:#ffffff"></i>Produk/Layanan</a>
                                    <ul class="treeview-menu">
                                      <li class="{{Request::is('/dropdown/dpage8') ? 'active' : null }}"><a href="/jenisproduklayanan"><i class=""></i> Jenis Produk/Layanan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage9') ? 'active' : null }}"><a href="/listtagihanproduklayanan"><i class=""></i> List Tagihan Produk/Layanan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage10') ? 'active' : null }}"><a href="/statusdokumentproduklayanan"><i class=""></i> Status Dokument Produk/Layanan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage11') ? 'active' : null }}"><a href="/statustagihanproduklayanan"><i class=""></i> Status Tagihan Produk/Layanan</a></li>
                                      <li class="{{Request::is('/dropdown/dpage12') ? 'active' : null }}"><a href="/laporanlisttagihanproduklayanan"><i class=""></i> Laporan</a></li>
                                    </ul>
                                  </li>
                                  <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o" style="color:#ffffff"></i>Project</a>
                                    <ul class="treeview-menu">
                                      <li class="{{Request::is('/dropdown/dpage13') ? 'active' : null }}"><a href="/listtagihanproject"><i class=""></i> List Tagihan Project</a></li>
                                      <li class="{{Request::is('/dropdown/dpage14') ? 'active' : null }}"><a href="/statusdokumentproject"><i class=""></i> Status Dokument Project</a></li>
                                      <li class="{{Request::is('/dropdown/dpage15') ? 'active' : null }}"><a href="/statustagihanproject"><i class=""></i> Status Tagihan Project</a></li>
                                      <li class="{{Request::is('/dropdown/dpage16') ? 'active' : null }}"><a href="/laporanlisttagihanproject"><i class=""></i> Laporan</a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </li>
                            <li>
                              <a href="#">
                                <i class="fa fa-share" style="color:#ffffff"></i><span>Faktur Pajak</span>
                              </a>
                              <ul class="treeview-menu">
                                <li class="{{Request::is('/dropdown/dpage17') ? 'active' : null }}"><a href="/listfakturpajak"><i class=""></i> List Faktur Pajak</a></li>
                                <li class="{{Request::is('/dropdown/dpage18') ? 'active' : null }}"><a href="/statusfakturpajak"><i class=""></i> Status Faktur Pajak</a></li>
                                <li class="{{Request::is('/dropdown/dpage19') ? 'active' : null }}"><a href="/laporanlistfakturpajak"><i class=""></i> Laporan</a></li></li>     
                              </ul>
                            </li>
                        </ul>
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
                                <a class="dropdown-item" href="{{url('/logout')}}">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
        @yield('content')
   </div>
                <!-- footer area start-->
        <footer>
            <div class="footer-area">
            </div>
        </footer>
        <!-- footer area end-->
    </div>
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

