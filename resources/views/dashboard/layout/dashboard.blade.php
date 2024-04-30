<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title> Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{ asset('dashboardasset/images/fevicon.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('dashboardasset/images/fevicon.png') }}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('dashboardasset/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('dashboardasset/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('dashboardasset/css/responsive.css') }}" />
    <!-- color css -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboardasset/') }}css/colors.css" /> --}}
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('dashboardasset/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('dashboardasset/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('dashboardasset/css/custom.css') }}" />
    <!--[if lt IE 9]> <![endif]-->
    {{-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> --}}
    {{-- <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> --}}

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="#"><img class="logo_icon img-responsive"
                                    src="{{ asset('dashboardasset/images/logo/chef.jpg') }}" alt="#"
                                    width="100" height="100" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="{{ asset('dashboardasset/images/layout_img/user_img.jpg') }}" alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>Noor Shaker</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                            <ul class="collapse list-unstyled" id="dashboard">
                                <li>
                                    <a href="{{ route('category.index') }}">> <span>Category</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('search') }}"><i class="fa fa-search orange_color"></i>
                                <span>Search</span></a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="#">> <span>General Elements</span></a></li>
                                <li><a href="#">> <span>Media Gallery</span></a></li>
                                <li><a href="#">> <span>Icons</span></a></li>
                                <li><a href="#">> <span>Invoice</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <li><a href="#">> <span>Email</span></a></li>
                                <li><a href="#">> <span>Calendar</span></a></li>
                                <li><a href="#">> <span>Media Gallery</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing
                                    Tables</span></a></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional
                                    Pages</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="#">> <span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="#">> <span>Projects</span></a>
                                </li>
                                <li>
                                    <a href="#">> <span>Login</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart-o green_color"></i>
                                <span>Charts</span></a></li>
                        <li><a href="#"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="#"><img class="img-responsive"
                                        src="{{ asset('dashboardasset/images/logo/logo.png') }}"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span
                                                    class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span
                                                    class="badge">3</span></a></li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="{{ asset('dashboardasset/images/layout_img/user_img.jpg') }}"
                                                    alt="#" /><span class="name_user">Noor Shaker</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                                <a class="dropdown-item" href="#">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i
                                                        class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- add informations --}}


                    @yield('body')


                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('dashboardasset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboardasset/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboardasset/js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('dashboardasset/js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('dashboardasset/js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('dashboardasset/js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('dashboardasset/js/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboardasset/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboardasset/js/utils.js') }}"></script>
    <script src="{{ asset('dashboardasset/js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('dashboardasset/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset('dashboardasset/js/custom.js') }}"></script>
    <script src="{{ asset('dashboardasset/js/chart_custom_style1.js') }}"></script>
</body>

</html>
