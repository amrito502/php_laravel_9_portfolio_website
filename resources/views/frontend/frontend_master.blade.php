<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Zaman IT Consulting</title>
    <!-- Google Web Fonts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- =====Css-All-file-start-section====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aos.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feature.css') }} ">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/counter/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/main/main.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    </style>
    <!-- =====Css-All-file-end-section====== -->
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{ route('frontend.home') }}">
                            <img class="main_logo" src="images/logo.jpg" alt="logo">
                            <!-- <h5 style="font-size: 32px; margin-top: 10px; margin-left: 10px;">
                                Zaman <span style="color: #FF014F;">IT</span>
                            </h5> -->
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('frontend.services') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('frontend.portfolio') }}">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.team') }}">Team
                                    Members</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.blog') }}">blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a>
                            </li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <a class="rn-btn" target="_blank" href="{{ route('frontend.contact') }}"><span>HIRE
                                ME</span></a>
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <img src="assets/images/logo/logos-circle.png" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->

    <!-- ==========start-main-section============ -->
    <main class="main-page-wrapper">

        @yield('frontend_content')

        <!-- =============================== -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->
        <!-- =============================== -->
    </main>
    <!-- ==========end-main-section============ -->




    <!-- Footer Start -->
    <div class="rn-footer-area footer_section footer-style-2 rn-section-gapTop section-separator">


        <div class="container-fluid footer_main_bg footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5 main_footer">
                    <div class="col-lg-3 col-md-6 single_footer">
                        <h5 class="text-light mb-4">ZamanIT</h5>
                        <span class="d-block fs-4 my-3"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York,
                            USA</span>
                        <span class="d-block fs-4 my-3"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</span>
                        <span class="d-block fs-4 my-3"><i class="fa fa-envelope me-3"></i>info@example.com</span>
                        <div class="d-flex footer_social">

                            <a class="btn btn-square rounded-circle me-1" href="" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle me-1" href="" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle me-1" href="" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square rounded-circle me-1" href="" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single_footer">
                        <h5 class="text-light mb-4">Our Services</h5>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">IT Course</a>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">Web Development</a>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">Hosting Service</a>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">Digital Marketing</a>
                    </div>
                    <div class="col-lg-3 col-md-6 single_footer">
                        <h5 class="text-light mb-4">Quick Links</h5>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">About Us</a>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">Contact Us</a>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">Our Services</a>
                        <a class="btn btn-link fs-4 footer_link my-3" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6 single_footer">
                        <h5 class="text-light mb-4">Newsletter</h5>
                        <span>Please Subscribe Now!! I will Email You for Essential Informations.</span>
                        <!-- Button trigger modal -->
                        <input type="text" name="" id="newsinput" style="
                            background: #212428;
                            margin: 16px 0 10px 0;
                            border-radius: 6px;
                            padding: 8px 14px;
                            color: #fffbfb;
                            font-size: 17px;
                            font-family: arial;
                            box-shadow: 8 0 25px 31px #212428;
                            outline: 0;
                            border: 1px solid #4d5258;
                        " placeholder="Enter Your Email">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>



            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright text-center ptb--40 section-separator">
                            <p class="description">© 2023. All rights reserved by <a target="_blank"
                                    href="#">ZamanIT.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>

    <!-- JS ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/vendor/jquery.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/modernizer.min.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/feather.min.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/wow.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/aos.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/particles.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }} "></script>
    <script src="{{ asset('assets/counter/lib/wow/wow.min.js') }} "></script>
    <script src="{{ asset('assets/counter/lib/waypoints/waypoints.min.js') }} "></script>
    <script src="{{ asset('assets/counter/lib/counterup/counterup.min.js') }} "></script>
    <script src="{{ asset('assets/counter/lib/parallax/parallax.min.js') }} "></script>
    <script src="{{ asset('assets/counter/js/app.js') }} "></script>
    <!-- main JS -->
    <script src="{{ asset('assets/js/main.js') }} "></script>
</body>

</html>