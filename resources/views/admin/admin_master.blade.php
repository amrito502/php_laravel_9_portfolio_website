<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('admin/profile/profile.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('admin/all.min.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>

<body>

    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse"
                    data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Admin</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">iOS Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">Android Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                            </span>
                                            <span class="time">
                                                6 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                            </span>
                                            <span class="time">
                                                56 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                            </span>
                                            <span class="time">
                                                3 hours
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                            </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                            </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="{{ url('/admin-profile') }}"><i class="halflings-icon user"></i> Profile</a></li>
                                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{ route('admin.dashboard') }}"><i class="icon-bar-chart"></i><span
                                    class="hidden-tablet">Dashboard</span></a>
                        </li>
 
                          <!--==============start-logo-section===============  -->
                          <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Logo</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('add.logo') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Logo</span></a></li>
                                <li><a class="submenu" href="{{ route('logo') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">View-Logo</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-logo-section===============  -->
                          <!--==============start-bannner-section===============  -->
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Banner</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('home.add_banner') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Banner</span></a></li>
                                <li><a class="submenu" href="{{ route('home.banner') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Banner</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-bannner-section===============  -->

                          <!--==============start-about-section===============  -->
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">About</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('add_about') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-About</span></a></li>
                                <li><a class="submenu" href="{{ route('about') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-About</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-about-section===============  -->
                          
                          <!--==============start-Services-section===============  -->
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Services</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('add.services') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Services</span></a></li>
                                <li><a class="submenu" href="{{ route('services') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Services</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-about-section===============  -->
                             <!--==============start-portfolio-section===============  -->
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Portfolio</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{  route('add.portfolio') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Portfolio</span></a></li>
                                <li><a class="submenu" href="{{ route('portfolio') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Portfolio</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-portfolio-section===============  -->
                             <!--==============start-team-section===============  -->
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Team Members</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('add.team') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Team</span></a></li>
                                <li><a class="submenu" href="{{ route('team') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Team</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-team-section===============  -->
                          <!--==============start-Trusted Client-section===============  -->
                          <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Blog</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('add.blog') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Blog</span></a></li>
                                <li><a class="submenu" href="{{ route('blog') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Blog</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-Trusted Client-section===============  -->
                           <!--==============start-Testimonial-section===============  -->
                           <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Testimonial</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('add.client') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Testimonial</span></a></li>
                                <li><a class="submenu" href="{{ route('client') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Testimonial</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-Testimonial-section===============  -->
                            <!--==============start-Testimonial-section===============  -->
                            <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Message</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ route('admin.message') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All Message</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-Testimonial-section===============  -->
                           <!--==============start-Footer-section===============  -->
                           <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Footer</span>
                                <!--<span class="label label-important"> 3 </span>-->
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/categories/create') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">Add-Footer</span></a></li>
                                <li><a class="submenu" href="{{ url('/categories') }}"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">All-Footer</span></a></li>
                                <!-- <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span
                                             class="hidden-tablet"> Sub Menu 3</span></a></li> -->
                            </ul>
                        </li>
                          <!--==============end-Footer-section===============  -->

                        <li><a href="{{ url('/admin-login') }}"><i class="icon-lock"></i><span class="hidden-tablet">Admin Login
                                    </span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <div id="content" class="span10">


                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Dashboard</a></li>
                </ul>




                <!-- =====start-dashbord==== -->
                @yield('admin_content')
                <!-- =====end-dashbord==== -->

                <!--/row-->



            </div>
            <!--/.fluid-container-->

            <!-- end: Content -->
        </div>
        <!--/#content.span10-->
    </div>
    <!--/fluid-row-->

    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer>

        <p>
            <span style="text-align:left;float:left">&copy; 2023 <a
                    href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/"
                    alt="Bootstrap_Metro_Dashboard">ZamanIt</a></span>

        </p>

    </footer>



    <!-- start: JavaScript-->
    <script src="{{ asset('admin/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('admin/all.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.ui.touch-punch.js') }}"></script>

    <script src="{{ asset('admin/js/modernizr.js') }}"></script>

    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>

    <script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('admin/js/excanvas.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.chosen.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.uniform.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.cleditor.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.noty.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.elfinder.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.raty.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.iphone.toggle.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.imagesloaded.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.masonry.min.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.knob.modified.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('admin/js/counter.js') }}"></script>

    <script src="{{ asset('admin/js/retina.js') }}"></script>

    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <!-- end: JavaScript-->
</body>

</html>