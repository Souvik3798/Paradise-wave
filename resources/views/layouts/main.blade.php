<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{str_replace('_',' ',env('APP_NAME'))}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Andaman Travel|Explore Paradise in Andaman and Nicobar Islands">
    <meta name="description" content="Discover the Andaman and Nicobar Islands with our travel packages. Explore pristine beaches, vibrant coral reefs, and rich culture. Book your adventure now!">
    <meta name="keywords" content="Andaman travel, Andaman Islands, Nicobar Islands, travel packages, honeymoon packages, family vacations, adventure travel, hotel booking, ferry services, water sports, Andaman destinations, island getaways">
    <meta name="google-site-verification" content="MCjjT4VGRN6zjfaWsHHCJCaI2qrK-ub1EptEkXitcro" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset('img/favicon.png')}}>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('css/magnific-popup.css')}}>
    <link rel="stylesheet" href={{asset('css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('css/themify-icons.css')}}>
    <link rel="stylesheet" href={{asset('css/nice-select.css')}}>
    <link rel="stylesheet" href={{asset('css/flaticon.css')}}>
    <link rel="stylesheet" href={{asset('css/gijgo.css')}}>
    <link rel="stylesheet" href={{asset('css/animate.css')}}>
    <link rel="stylesheet" href={{asset('css/slick.css')}}>
    <link rel="stylesheet" href={{asset('css/slicknav.css')}}>
    <link rel="stylesheet" href=https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css>

    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href={{url('/')}}>
                                        <img height="70px" src={{asset('img/logo.png')}} alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href={{url('/')}}>home</a></li>
                                            <li><a href={{url('/about')}}>About</a></li>
                                            <li><a class="" href={{('/packages')}}>Packages</a></l/li>
                                            <li><a href="">Destinations <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    @php
                                                        $places = \App\Models\Places::all();
                                                    @endphp
                                                    @foreach ($places as $place)
                                                        <li><a href={{url('place/'.$place->id)}}>{{$place->name}}</a></li>
                                                    @endforeach

                                                        <li><a href={{url('gallery')}}>Gallery</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Activities <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    @php
                                                        $activities = \App\Models\Activities::all();
                                                    @endphp
                                                    @foreach ($activities as $activity)
                                                        <li><a href="{{url('activity/'.$activity->id)}}">{{$activity->name}}</a></li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                            <li><a href={{url('contact')}}>Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> +91 8900900490</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <style>
        .whatsapp_float{
            position: fixed;
            bottom: 40px;
            right: 20px;
        }
    </style>

    <div class="whatsapp_float">
        <img src="{{asset('img/WhatsApp_icon.png.webp')}}" width="50px" class="whatsapp_float_btn" alt="Paradise Waves Whatsapp">
    </div>
    <!-- header-end -->



    @yield('content')





    <footer class="footer" style="margin-bottom: -100%">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img height="200px" src="{{asset('img/footer_logo.png')}}" alt="">
                                </a>
                            </div>
                            <p>Care of Paradise Waves, Ground floor of PNB <br> , Junglighat, M.G. Road, Port Blair, Andaman & Nicobar Islands, India - 744103 <br>
                                <a href="#">+91 9679506486, +91 8900900490</a> <br>
                                <a href="#">paradisewaves2023@gmail.com</a>



                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigation
                            </h3>
                            <ul class="links">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('packages')}}"> Packages</a></li>
                                <li><a href="{{url('gallery')}}"> Gallery</a></li>
                                <li><a href="{{url('contact')}}"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                @php
                                    $places = \App\Models\Places::all();
                                @endphp
                                @foreach ($places as $place)
                                    <li><a href="{{url('place/'.$place->id)}}">{{$place->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Gallery
                            </h3>
                            @php
                                $pic = \App\Models\Galleries::all()->take(9);
                            @endphp
                            @foreach ($pic as $image)
                                <div class="instagram_feed">
                                    <div class="single_insta">
                                        <a href="#">
                                            <img src={{asset('storage/'.$image->images)}} alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://animakers.framer.ai" target="_blank">Animakers</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->

    <!-- link that opens popup -->
<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src={{asset('js/vendor/modernizr-3.5.0.min.js')}}></script>
    <script src={{asset('js/vendor/jquery-1.12.4.min.js')}}></script>
    <script src={{asset('js/popper.min.js')}}></script>
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <script src={{asset('js/owl.carousel.min.js')}}></script>
    <script src={{asset('js/isotope.pkgd.min.js')}}></script>
    <script src={{asset('js/ajax-form.js')}}></script>
    <script src={{asset('js/waypoints.min.js')}}></script>
    <script src={{asset('js/jquery.counterup.min.js')}}></script>
    <script src={{asset('js/imagesloaded.pkgd.min.js')}}></script>
    <script src={{asset('js/scrollIt.js')}}></script>
    <script src={{asset('js/jquery.scrollUp.min.js')}}></script>
    <script src={{asset('js/wow.min.js')}}></script>
    <script src={{asset('js/nice-select.min.js')}}></script>
    <script src={{asset('js/jquery.slicknav.min.js')}}></script>
    <script src={{asset('js/jquery.magnific-popup.min.js')}}></script>
    <script src={{asset('js/plugins.js')}}></script>
    <script src={{asset('js/gijgo.min.js')}}></script>
    <script src={{asset('js/slick.min.js')}}></script>



    <!--contact js-->
    <script src={{asset('js/contact.js')}}></script>
    <script src={{asset('js/jquery.ajaxchimp.min.js')}}></script>
    <script src={{asset('js/jquery.form.js')}}></script>
    <script src={{asset('js/jquery.validate.min.js')}}></script>
    <script src={{asset('js/mail-script.js')}}></script>


    <script src={{asset('js/main.js')}}></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>
