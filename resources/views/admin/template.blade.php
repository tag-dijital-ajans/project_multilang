<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Agency - Responsive Flat Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/admin/images/faviicon.png">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/admin/plugins/morris/morris.css">

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css">
@yield('css')
</head>

<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="ion-close"></i>
        </button>

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <!--<a href="index.html" class="logo">Admiry</a>-->
                <a href="index.html" class="logo"><img src="/admin/images/logo.png" height="33" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div class="user-details">
                <div class="text-center">
                    <img src="/admin/images/users/avatar-6.jpg" alt="" class="rounded-circle">
                </div>
                <div class="user-info">
                    <h4 class="font-16 text-white">Elena Retson</h4>
                    <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                </div>
            </div>

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title text-white">General</li>

                    <li>
                        <a href="{{route('administrator.index')}}" class="waves-effect">
                            <i class="ti-home"></i>
                            <span> Yönetim Paneli <span class="badge badge-primary pull-right"></span></span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i> <span> User Interface </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-lightbox.html">Lightbox</a></li>
                            <li><a href="ui-navs.html">Navs</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-video.html">Video</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i> <span> Advanced UI </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="advanced-animation.html">Animation</a></li>
                            <li><a href="advanced-highlight.html">Highlight</a></li>
                            <li><a href="advanced-rating.html">Rating</a></li>
                            <li><a href="advanced-nestable.html">Nestable</a></li>
                            <li><a href="advanced-alertify.html">Alertify</a></li>
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="icons-material.html">Material Design</a></li>
                            <li><a href="icons-ion.html">Ion Icons</a></li>
                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="badge badge-success pull-right">8</span></a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-editors.html">Form Editors</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-c3.html">C3 Chart</a></li>
                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout"></i><span> Tables </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>

                    <li class="menu-title text-white">Extra</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-map"></i><span> Maps </span> <span class="badge badge-danger pull-right">2</span></a>
                        <ul class="list-unstyled">
                            <li><a href="maps-google.html"> Google Map</a></li>
                            <li><a href="maps-vector.html"> Vector Map</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span> Calendar </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="pages-timeline.html">Timeline</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-directory.html">Directory</a></li>
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-blank.html">Blank Page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-email-outline noti-icon"></i>
                                <span class="badge badge-danger noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-success noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/admin/images/users/user-5.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Dashboard</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
          {{--  <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon"><i class="ti-shopping-cart"></i></span>
                                <div class="mini-stat-info text-right text-light">
                                    <span class="counter text-white">15852</span> Total Earnings
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-success">
                                <span class="mini-stat-icon"><i class="ti-user"></i></span>
                                <div class="mini-stat-info text-right text-light">
                                    <span class="counter text-white">956</span> Pending Projects
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-orange">
                                <span class="mini-stat-icon"><i class="ti-shopping-cart-full"></i></span>
                                <div class="mini-stat-info text-right text-light">
                                    <span class="counter text-white">5210</span> New Users
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-info">
                                <span class="mini-stat-icon"><i class="ti-stats-up"></i></span>
                                <div class="mini-stat-info text-right text-light">
                                    <span class="counter text-white">20544</span> New Projects
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-sec m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Product sales</h4>
                                    <div id="morris-area-example" style="height: 300px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-sec m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Revenue</h4>

                                    <ul class="list-inline widget-chart m-t-20 text-center">
                                        <li>
                                            <h4 class=""><b>5248</b></h4>
                                            <p class="text-muted m-b-0">Marketplace</p>
                                        </li>
                                        <li>
                                            <h4 class=""><b>321</b></h4>
                                            <p class="text-muted m-b-0">Last week</p>
                                        </li>
                                        <li>
                                            <h4 class=""><b>964</b></h4>
                                            <p class="text-muted m-b-0">Last Month</p>
                                        </li>
                                    </ul>

                                    <div id="morris-bar-example" style="height: 300px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xl-8">
                            <div class="card card-sec m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-15 header-title">Recent Orders</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr class="titles">
                                                <th>Costumer Name</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Invoice</th>
                                                <th>Start date</th>
                                                <th>Amount</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="c-table__cell">
                                                    <div class="user-wrapper">
                                                        <div class="img-user">
                                                            <img src="/admin/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                                        </div>
                                                        <div class="text-user">
                                                            <h6>Tiger Nixon</h6>
                                                            <p>Web Designer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="c-table__cell">Dribble</td>
                                                <td class="c-table__cell"><span class="badge badge-warning">Due</span></td>
                                                <td class="c-table__cell">INV-001001</td>
                                                <td class="c-table__cell">2011/04/25</td>
                                                <td class="c-table__cell">$320,800</td>
                                            </tr>
                                            <tr>
                                                <td class="c-table__cell">
                                                    <div class="user-wrapper">
                                                        <div class="img-user">
                                                            <img src="/admin/images/users/user-2.jpg" alt="user" class="rounded-circle">
                                                        </div>
                                                        <div class="text-user">
                                                            <h6>Tiger Nixon</h6>
                                                            <p>Web Designer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Accountant</td>
                                                <td><span class="badge badge-info">Paid</span></td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td class="c-table__cell">
                                                    <div class="user-wrapper">
                                                        <div class="img-user">
                                                            <img src="/admin/images/users/user-3.jpg" alt="user" class="rounded-circle">
                                                        </div>
                                                        <div class="text-user">
                                                            <h6>Tiger Nixon</h6>
                                                            <p>Web Designer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Junior Technical Author</td>
                                                <td><span class="badge badge-info">Paid</span></td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td class="c-table__cell">
                                                    <div class="user-wrapper">
                                                        <div class="img-user">
                                                            <img src="/admin/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                                        </div>
                                                        <div class="text-user">
                                                            <h6>Tiger Nixon</h6>
                                                            <p>Web Designer</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>Senior Javascript Developer</td>
                                                <td><span class="badge badge-warning">Due</span></td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card card-sec m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                    <ul class="list-inline widget-chart m-t-20 text-center">
                                        <li>
                                            <h4 class=""><b>3654</b></h4>
                                            <p class="text-muted m-b-0">Marketplace</p>
                                        </li>
                                        <li>
                                            <h4 class=""><b>954</b></h4>
                                            <p class="text-muted m-b-0">Last week</p>
                                        </li>
                                        <li>
                                            <h4 class=""><b>8462</b></h4>
                                            <p class="text-muted m-b-0">Last Month</p>
                                        </li>
                                    </ul>

                                    <div id="morris-donut-example" style="height: 265px"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- Page content Wrapper -->--}}
@yield('content')


        </div>
        <!-- content -->

        <footer class="footer">
            © 2018 Agency - Crafted with <i class="mdi mdi-heart text-danger"></i> by Lamarena.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/modernizr.min.js"></script>
<script src="/admin/js/detect.js"></script>
<script src="/admin/js/fastclick.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>
<script src="/admin/js/jquery.blockUI.js"></script>
<script src="/admin/js/waves.js"></script>
<script src="/admin/js/jquery.nicescroll.js"></script>
<script src="/admin/js/jquery.scrollTo.min.js"></script>

<!--Morris Chart-->
<script src="/admin/plugins/morris/morris.min.js"></script>
<script src="/admin/plugins/raphael/raphael-min.js"></script>

<script src="/admin/pages/dashborad.js"></script>

<!-- App js -->
<script src="/admin/js/app.js"></script>
@yield('js')
</body>

</html>