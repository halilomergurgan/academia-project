<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="http://allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/frontend/css/linearfont.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/meanmenu.min.css">
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.css">
    <link rel="stylesheet" href="/frontend/css/owl.transitions.css">
    <link rel="stylesheet" href="/frontend/css/animate.css">
    <link rel="stylesheet" href="/frontend/css/normalize.css">
    <link rel="stylesheet" href="/frontend/css/nivo-slider.css">
    <link rel="stylesheet" href="/frontend/venobox/venobox.css">
    <link rel="stylesheet" href="/frontend/css/main.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <link rel="stylesheet" href="/css2/bootstrap.min.css">
    <link rel="stylesheet" href="/css2/iconfont.min.css">
    <link rel="stylesheet" href="/css2/revslider/settings.css">
    <link rel="stylesheet" href="/css2/revslider/revslider.css">
    <link rel="stylesheet" href="/css2/plugins.css">
    <link rel="stylesheet" href="/css2/helper.css">
    <link rel="stylesheet" href="/css2/style.css">
    <script src="/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;58db6a26-9e61-45d4-ab02-0ad0237200c3=<your API-key>"
            type="text/javascript"></script>
    <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: 8px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
</head>
<body>

<!--start header  area -->
<div class="header_area" style="height: 135px;">
    <div class="container">
        <div class="row">

            <!-- header  logo -->
            <div class="col-md-4 col-sm-3 col-xs-12">
                <div class="logo">
                    <a href="/"><img src="/frontend/img/logo2.png" alt=""
                                     style="width: 460px; height: 225px; margin: -50px;"/></a>
                </div>
            </div>
            <!-- end header  logo -->
            <div class="col-md-8 col-sm-9 col-xs-12">
                <div>
                    <div class="form pull-right">
                        <div class="language">
                            {{--                            <select class="form-lan">--}}
                            {{--                                <option value="english" selected>English</option>--}}
                            {{--                                <option value="english">Türkçe</option>--}}
                            {{--                            </select>--}}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!--end header  area -->
<!--Start mobile menu  area -->
<div class="mobile_memu_area home-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile_memu">
                    <!--  nav menu-->
                    <nav>
                        <ul class="navid">
                            @foreach($_navbar2 as $key=> $menu)
                            <li><a href="#">{{$menu->name_tr}}</a>
                                <ul>
                                    @foreach($menu->post as $key=>   $single)
                                        <li><a href="/single-post/{{$single->id}}">{{$single->title_tr}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <li><a href="/teachers">Eğitim Kadromuz</a></li>
                            <li><a href="/about">Hakkımızda</a></li>
                            <li><a href="/contact">İletişim</a></li>
                        </ul>
                    </nav>
                    <!--end  nav menu-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end mobile menu  area -->
<!--Start nav  area -->
<div class="nav_area">
    <div class="container">
        <div class="row">
            <!--Menu start-->
            <div class="col-lg-10 col-md-8 col-6 d-flex justify-content-end position-static" style="margin: -19px;">
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Anasayfa </a></li>
                        @foreach($_navbar as $key=> $menu)
                            <li><a href="#"><span>{{$menu->name_tr}}</span></a>
                                <ul class="sub-menu">
                                    @foreach($menu->submenus as $key2 => $submenu)
                                        <li class="has-dropdown">
                                            <a href="#">{{$submenu->name_tr}}</a>
                                            <ul class="sub-menu">
                                                @foreach($submenu->posts as $key3 => $post)
                                                    <li><a href="/post/{{$post->id}}">{{$post->title_tr}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>

                            </li>
                        @endforeach

                        @foreach($_navbar2 as $key=> $menu)

                            <li><a href="#"><span>{{$menu->name_tr}}</span></a>
                                <ul class="sub-menu">
                                    @foreach($menu->post as $key=>   $single)
                                    <li><a href="/single-post/{{$single->id}}">{{$single->title_tr}}</a></li>
                                        @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li><a href="/teachers">Eğitim Kadromuz</a></li>
                        <li><a href="/about">Hakkımızda</a></li>
                        <li><a href="/contact">İletişim</a></li>
                    </ul>
                </nav>
                <!--Menu end-->
            </div>
        </div>
    </div>
</div>
<!--end nav  area -->

@yield('content')

<!-- footer bottom area -->
<div class="footer_bottom_area">
    <div class="container">
        <div class="row">
            <div class=" col-sm-6 col-md-6 col-lg-6">
                <div class="footer_text">
                    <p>
                        <a href="https://ydyazilim.com/tr/">YD Yazılım</a> © 2019 <br> Tüm Hakları Saklıdır..
                    </p>
                </div>
            </div>
            <div class=" col-sm-6 col-md-6 col-lg-6">

            </div>
        </div>
    </div>
</div>
<!--Start script  area -->
<script src="/frontend/js/vendor/jquery-1.11.3.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/wow.min.js"></script>
<script src="/frontend/js/jquery.nivo.slider.pack.js"></script>
<script src="/frontend/js/jquery.meanmenu.min.js"></script>
<script src="/frontend/js/owl.carousel.min.js"></script>
<script src="/frontend/js/jquery.scrollUp.min.js"></script>
<script src="/frontend/js/atvImg-min.js"></script>
<script type="text/javascript" src="/frontend/venobox/venobox.min.js"></script>
<script src="/frontend/js/plugins.js"></script>
<script src="/frontend/js/main.js"></script>

<script src="event_rollover.js" type="text/javascript"></script>
<script>

    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map('map', {
                center: ["<?php echo $contact[0]->latitude; ?>", "<?php echo $contact[0]->longitude; ?>"],
                zoom: 16
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark(myMap.getCenter());

        myMap.geoObjects.add(myPlacemark);

        myPlacemark.events
            .add('mouseenter', function (e) {
                /**
                 * A reference to the object that triggered the event;
                 * you can get it from the 'target' field.
                 */
                e.get('target').options.set('preset', 'islands#greenIcon');
            })
            .add('mouseleave', function (e) {
                e.get('target').options.unset('preset');
            });
    }
</script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
<!--End script  area -->
</body>
</html>
