<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Store') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- end styles -->
    <!-- end head laravel -->

    <!-- start link home Reastaurnt -->
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="plugins/video-popup/modal-video.min.css">
    <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
    <link rel="stylesheet" href="plugins/date-picker/datepicker.min.css">
    <link rel="stylesheet" href="plugins/clock-picker/clockpicker.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="plugins/devices.min.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- End link home Reastaurnt -->

</head>

<body>

    <!-- images for beginning pages web -->
    <div class="preloader">
        <img src="images/preloader.gif" alt="preloader" class="img-fluid">
    </div>
    <!-- End images for beginning pages web -->

    <!-- Header Start -->
    <header class="navigation ">
        <nav class="navbar navbar-expand-lg main-nav py-lg-3 position-absolute w-100" id="main-nav">

            <div class="container">
                <a class="navbar-brand" href="#">
                    {{-- <img src="images/logo.png" alt="" class="img-fluid"> --}}
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('cook-index') }}">Home</a>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('cook-about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cook-menu') }}">Recipes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cook-gallery') }}">Gallery</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Reservation</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('cook-reservation') }}">Reservation</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('cook-cart') }}">Cart</a></li>
                                <li><a class="dropdown-item" href="{{ route('cook-shipping') }}">Shipping</a></li>
                                <li><a class="dropdown-item" href="{{ route('cook-payment') }}">Payment</a></li>
                                <li><a class="dropdown-item" href="{{ route('cook-confirmation') }}">Confirmation</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                {{-- <li><a class="dropdown-item" href="{{ route('cook-blog1') }}">Blog </a></li>
                                <li><a class="dropdown-item" href="{{ route('cook-blog2') }}">Blog Single</a></li> --}}
                            </ul>
                        </li>

                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('cook-contact') }}">Contact</a></li> --}}

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest

                    </ul>


                </div>

            </div>
        </nav>
    </header>

    <!-- Header Close -->



    <!-- beginning content -->
    <main>
        @yield('content')
    </main>
    <!-- End content -->


    <!-- start fppter -->
    <footer class="section footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-3 mb-5 mb-lg-0">
                    <div class="widget">
                        <h4 class="mb-3">About</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, nam!</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="ti-facebook mr-2"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="ti-twitter mr-2 "></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://github.com/themefisher/"><i
                                        class="ti-github mr-2 "></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://dribbble.com/themefisher/"><i
                                        class="ti-dribbble mr-2 "></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 ml-auto col-md-5 mb-5 mb-lg-0">
                    <div class="widget">
                        <h4 class="mb-3">Contact Info</h4>

                        <ul class="list-unstyled mb-0 footer-contact">
                            <li><i class="ti-mobile"></i>+1 987 654 3210</li>
                            <li><i class="ti-email"></i>mail@Store.com</li>
                            <li><i class="ti-map"></i>1234 Altschul, Sweden,NY 10027-0000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                    <div class="widget">
                        <h4 class="mb-3">Opening Hours</h4>

                        <div class="info mb-4">
                            <p class="mb-0">Monday - Thursday</p>
                            <h5>10:00 AM - 11:00 PM</h5>
                        </div>
                        <div class="info">
                            <p class="mb-0">Friday - Sunday</p>
                            <h5>12:00 AM - 03:00 AM</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">
                    <h4 class="text-white-50 mb-3">Get latest food recipe at your inbox</h4>
                    <form action="#" class="footer-newsletter">
                        <div class="form-group">
                            <button class="button"><span class="ti-email"></span></button>
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-btm py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <p class="mb-0 ">Copyright &copy; 2019 a theme by <a href="http://sanofa.se/"
                                class="text-white">Sanofa Software Company</a></p>

                        <div class="footer-menu mt-3 mt-lg-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item pl-2"><a href="{{ route('cook-index') }}">Home</a></li>
                                {{-- <li class="list-inline-item pl-2"><a href="{{ route('cook-about') }}">About Us</a>
                                </li>
                                <li class="list-inline-item pl-2"><a href="{{ route('cook-gallery') }}">Gallery</a>
                                </li>
                                <li class="list-inline-item pl-2"><a href="{{ route('cook-policy') }}">Privacy
                                        Policy</a></li>
                                <li class="list-inline-item pl-2"><a href="{{ route('cook-terms') }}">Use of
                                        terms</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/aos/aos.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="plugins/date-picker/datepicker.min.js"></script>
    <script src="plugins/clock-picker/clockpicker.min.js"></script>
    <script src="plugins/video-popup/jquery-modal-video.min.js"></script>
    <script src="plugins/swiper/swiper.min.js"></script>
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <script src="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <!-- Main Script -->
    <script src="js/contact.js"></script>
    <script src="js/script.js"></script>


</body>

</html>