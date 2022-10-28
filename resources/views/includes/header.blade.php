<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- title -->
    <!----font icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Ahava Development Initiative </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Nerdysigns">
    <meta name="description" content="Ahava Development Initiative (ADI) is a non profit organisation set up with the primary objective of championing a comprehensive approach to
          tackling the causes & consequences of poverty, inequality & national rift.">

    <meta name="keywords" content="Ahava Development Initiative (ADI) is a non profit organisation set up with the primary objective of championing a comprehensive approach to tackling the causes & consequences of poverty, inequality & national rift. We are contributing towards eradicating poverty and building an inclusive society, through shifting the human understanding toward
         compassion and connection, sharing simple acts of love.">

    <!---font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">



    <!-- favicon -->

    <link rel="shortcut icon" href="{{ url('img/favicon.ico')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{ url('css/animate.css')}}" />
    <!---flaticons-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/flaticon.css')}}">


    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}" />
    <!-- et line icon -->
    <link rel="stylesheet" href="{{ url('css/et-line-icons.css')}}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}" />
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ url('css/themify-icons.css')}}">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{ url('css/swiper.min.css')}}">
    <!-- justified gallery -->
    <link rel="stylesheet" href="{{ url('css/justified-gallery.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css')}}" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('revolution/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ url('revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('revolution/css/navigation.css')}}">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ url('css/bootsnav.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('css/responsive.css')}}" />
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <style type="text/css">
        #showmore,
        #moree {
            display: none;
        }

        highlights .swiper-button-next-news,
        .highlights .swiper-button-prev-news {
            float: left;
            margin-top: 18px;
            cursor: pointer;
        }

        .highlights .swiper-button-prev-news,
        .highlights .swiper-button-next-news {
            display: flex;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .highlights span.swiper-pagination-bullet.swiper-pagination-bullet-active {
            background: #b4936b;
        }

        body{
            text-align: justify !important;
        }

        .highlights .swiper-container {
            padding-bottom: 28px;
        }

        .highlights .swiper-slide {}

        .highlights .swiper-slide-post h3 {
            font-size: 30px;
            line-height: 30px;
            /*text-transform: uppercase;*/
            color: #fff !important;
            padding-left: 15px;
        }

        .highlights .swiper-slide-pos h3 {
            color: #fff;
        }

        .highlights .swiper-slide-inner {
            position: relative;
            display: inline-block;
            width: 100%;
            overflow: hidden;
            height: 340px;
        }

        .abs_link {
            position: absolute;
            top: 0;
            height: 340px;
            width: 100%;
            left: 0;
            z-index: 11;
        }

        .highlights-article {
            left: 0;
        }

        .highlights-article {
            width: 100% !important;
            left: 15px;
            bottom: 0;
            position: absolute;
        }

        @media only screen and (min-width: 1100px) {

            .highlights-article {
                width: 500px;
                float: right;
                position: absolute;
                right: 0;
                left: initial !important;
                bottom: 0;
            }
        }
    </style>
    <script type="text/javascript">

        function myFunctionn() {
            var dots = document.getElementById("dotss");
            var moreText = document.getElementById("moree");
            var btnText = document.getElementById("myBtnn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "<span class='text-medium text-deep-pink'>Read More&nbsp;&nbsp;<i class='fa fa-arrow-right mr-0' aria-hidden='true'></i></span>";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "<span class='text-medium text-deep-pink'>Read Less&nbsp;&nbsp;<i class='fa fa-arrow-left mr-0' aria-hidden='true'></i></span>";
                moreText.style.display = "inline";
            }
        }


        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("showmore");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "contents";
                btnText.innerHTML = "<span class='text-medium text-deep-pink'>See More&nbsp;&nbsp;<i class='fa fa-arrow-right mr-0' aria-hidden='true'></i></span>";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "<span class='text-medium text-deep-pink'>See Less&nbsp;&nbsp;<i class='fa fa-arrow-left mr-0' aria-hidden='true'></i></span>";
                moreText.style.display = "contents";
            }
        }

    </script>
</head>

<body>
    <header class="no-sticky">
        <!-- start navigation -->
        <nav class="navbar full-width-pull-menu navbar-top-scroll no-border-top no-transition"
            style="background-color:white;">
            <!-- start navigation panel -->
            <div class="container nav-header-container height-100px sm-height-70px sm-padding-15px-lr ">
                <!-- start logo -->
                <div class="col-auto pl-0"><a href="{{route('index')}}" title="Ahava Development Initiative" class="logo"><img
                            src="{{url('img/logo.png')}}" data-rjs="img/logo@2x.png" alt="Ahava Development Initiative"></a></div>
                <!-- end logo -->
                <!-- start main menu -->
                <div class="col-auto pr-0">
                    <div class="menu-wrap full-screen d-flex">
                        <div class="col-md-8 p-0 d-none d-md-block">

                        </div>
                        <div class="col-md-4 p-0 bg-dark full-screen">
                            <div class="position-absolute height-100 width-100 overflow-auto">
                                <div class="d-table height-100 width-100">
                                    <div class="d-table-cell height-100 width-100 vertical-align-middle padding-fourteen-lr
                                         alt-font link-style-2 md-padding-seven-lr sm-padding-15px-lr">
                                        <!-- start menu -->
                                        <ul class="font-weight-600 sm-no-padding-left">
                                            <!-- start menu item -->
                                            <div class="container">
                                                <a href="{{ route('donate')}}">
                                                    <div class="row">
                                                        <div
                                                            class="col-12 text-center sm-margin-30px-bottom md-margin-30px-bottom">
                                                            <input type="submit"
                                                                class="btn btn-transparent-donate btn-large btn-rounded margin-20px-top"
                                                                value="Donate Now" name="Donate">
                                                        </div>
                                                        <!-- <div class="col-6 text-center sm-margin-30px-bottom md-margin-30px-bottom">
                                                                <input type="submit" class="btn btn-transparent-donate btn-large btn-rounded margin-20px-top" value="volunteer" name="Donate">
                                                            </div> -->
                                                    </div>
                                                </a>

                                            </div>

                                            <li class="dropdown">
                                                <a href="{{route('index')}}">Home</a>
                                                <hr>
                                            </li>
                                            <!-- end menu item -->
                                            <!-- start menu item -->
                                            <!-- <li><a href="#whoweare" title="Who We Are" class="inner-link">Who We Are</a></li>
                                                <hr> -->
                                            <!-- end menu item -->
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle">About Us</a>

                                                <ul class="dropdown-menu font-weight-300">
                                                    <li><a href="{{route('whoWeAre')}}" title="">Who we are</a></li>

                                                    <li><a href="{{route('whatWeDo')}}" title="">What we do</a></li>
                                                    <li><a href="{{route('visionAndMisson')}}" title="">Vision & Mission</a></li>

                                                    <li><a href="{{route('team')}}" title="">Team</a></li>
                                                </ul>
                                            </li>
                                            <hr>


                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle">Campaign &
                                                    Advocacy</a>
                                                <hr>
                                                <ul class="dropdown-menu font-weight-300">
                                                    <li><a href="{{route('livelihood')}}" title="Next Program">Ahava livelihood
                                                            and social mobility program</a></li>

                                                    <li><a href="{{route('socialFund')}}" title="">Ahava Social Fund
                                                            Management</a></li>

                                                    <li><a href="{{route('patroitism')}}" title="">Ahava Patriotism and
                                                            peacebuilding program </a></li>

                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle">News Letter & Updates
                                                </a>
                                                <hr>
                                                <ul class="dropdown-menu font-weight-300">
                                                    <li><a href="{{route('livingForACourse')}}" title="Next Program">Ahava Food Pantry Launch
                            </a></li>


                                                </ul>
                                            </li>


                                            <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                                            <hr>
                                            <li><a href="#">Volunteer</a></li>
                                            <hr>
                                            

                                            @unless(!Auth::check())

                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle">Admin</a>
                                                <hr>
                                                <ul class="dropdown-menu font-weight-300">
                                                    <li><a href="{{route('adminMessages')}}" title="Next Program">Messages</a></li>

                                                    <li><a href="{{route('volunteerAdmin')}}" title="">Volunteers</a></li>

                                                    <li><a href="{{route('comot')}}" title=""> logout</a></li>

                                                </ul>
                                            </li>

                                            @endunless
                                        </ul>
                                        <!-- end menu -->
                                        <!-- start social links -->
                                        <div class="margin-fifteen-top padding-35px-left sm-no-padding-left">
                                            <div class="icon-social-medium margin-three-bottom">
                                                <p2 class="text-white">Follow us :</p2>
                                                <a href="https://web.facebook.com/ahavadevinit" target="_blank"
                                                    class="text-white text-deep-pink-hover margin-one-lr"><i
                                                        class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                <a href="#" target="_blank"
                                                    class="text-white text-deep-pink-hover margin-one-lr"><i
                                                        class="fab fa-twitter" aria-hidden="true"></i></a>
                                                <a href="https://www.instagram.com/ahavadevinit/" target="_blank"
                                                    class="text-white text-deep-pink-hover margin-one-lr"><i
                                                        class="fab fa-instagram" aria-hidden="true"></i></a>
                                                <a href="https://www.linkedin.com/company/ahava-development-initiative/"
                                                    target="_blank"
                                                    class="text-white text-deep-pink-hover margin-one-lr"><i
                                                        class="fab fa-linkedin" aria-hidden="true"></i></a>
                                                <a href="mailto:info@ahavadevinit.org" target="_blank"
                                                    class="text-extra-dark-gray text-deep-pink-hover margin-one-lr"><i
                                                        class="fab fa-envelope" aria-hidden="true"></i></a>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="close-button-menu" id="close-button"></button>
                        </div>
                    </div>
                    <!-- end main menu -->
                    <button class="navbar-toggler mobile-toggle slider_txt" type="button" id="open-button"
                        data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                        <span></span>
                        <span></span>

                    </button>

                </div>
            </div>
            <!-- end navigation panel -->
        </nav>
        <!-- end navigation -->
    </header>


    
    <!-- end header -->
