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
{{--<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>--}}

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
                <a href="{{route('admin.index')}}" class="logo"><img src="/admin/images/logopanel.png" height="33" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            {{--<div class="user-details">
                <div class="text-center">
                    <img src="/admin/images/users/avatar-6.jpg" alt="" class="rounded-circle">
                </div>
                <div class="user-info">
                    <h4 class="font-16 text-white">Elena Retson</h4>
                    <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                </div>
            </div>--}}

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title text-white">Genel</li>

                    <li>
                        <a href="{{route('admin.index')}}" class="waves-effect">
                            <i class="mdi mdi-home-map-marker "></i>
                            <span> Anasayfa <span class="badge badge-primary pull-right"></span></span>
                        </a>
                    </li>



                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i><span> Tüm Ayarlar </span> <span class="badge badge-danger pull-right">2</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('mainpagesetting.index')}}"> Anasayfa Ayarları</a></li>
                            <li><a href="{{route('setting.index')}}"> Site Ayarları</a></li>
                        </ul>
                    </li>




                 {{--   <li >
                        <a href="{{route('mainpage.index')}}" class="waves-effect"><i class="ti-home"></i><i class="ti-settings"></i> <span> Anasayfa Ayarları </span> </a>

                    </li>
                    <li >
                        <a href="{{route('setting.index')}}" class="waves-effect"><i class="ti-settings"></i> <span> Site Ayarları </span> </a>

                    </li>--}}

                    <li >
                        <a href="{{route('page.index')}}" class="waves-effect"><i class="ti-files"></i></i> <span> Sayfa Yönetimi </span> </a>

                    </li>
                    <li >
                        <a href="{{route('service.index')}}" class="waves-effect"><i class="mdi mdi-store "></i></i> <span> Hizmet Yönetimi </span> </a>

                    </li>
                    <li >
                        <a href="{{route('project.index')}}" class="waves-effect"><i class="dripicons-hourglass  "></i></i> <span> Proje Yönetimi </span> </a>

                    </li>
                    <li >
                        <a href="{{route('projectcategory.index')}}" class="waves-effect"><i class="mdi mdi-book-open-page-variant  "></i></i> <span> Proje Kategori  </span> </a>

                    </li>
                    <li >
                        <a href="{{route('reference.index')}}" class="waves-effect"><i class="dripicons-user-id  "></i></i> <span> Referans Yönetimi  </span> </a>

                    </li>
                    <li >
                        <a href="{{route('slider.index')}}" class="waves-effect"><i class="ti-layout-slider"></i></i> <span> Slider Yönetimi  </span> </a>

                    </li>
                    <li >
                        <a href="{{route('blog.index')}}" class="waves-effect"><i class="mdi mdi-blogger "></i></i> <span> Blog Yönetimi  </span> </a>

                    </li>
                    <li >
                        <a href="{{route('blogcategory.index')}}" class="waves-effect"><i class="dripicons-blog  "></i></i> <span> Blog Kategori  </span> </a>

                    </li>
                    <li >
                        <a href="{{route('menu.index')}}" class="waves-effect"><i class="ti-menu-alt   "></i></i> <span> Menu Yönetimi  </span> </a>

                    </li>
                    <li >
                        <a href="{{route('gallery.index')}}" class="waves-effect"><i class="ti-gallery    "></i></i> <span> Galeri Yönetimi  </span> </a>

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
                            <h3 class="page-title">Yönetim Paneli</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
          <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    @include('admin.flash_message')

                    @yield('content')



                </div>
                <!-- container -->

            </div>
            <!-- Page content Wrapper -->



        </div>
        <!-- content -->

        <footer class="footer">
            © 2019 Tag Dijital
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