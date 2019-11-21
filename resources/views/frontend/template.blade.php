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
    <link rel="stylesheet" href="/frontend/css/nivo-slider.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/responsive.css">
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
</head>
<body>

<!--start header  area -->
<div class="header_area">
    <div class="container">
        <div class="row">
            <!-- header  logo -->
            <div class="col-md-4 col-sm-3 col-xs-12">
                <div class="logo"><a href="/"><img src="frontend/img/logo.png" alt="" /></a></div>
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
<!--Start nav  area -->
<div class="nav_area">
    <div class="container">
        <div class="row">
            <!--nav item-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!--  nav menu-->
                <nav class="menu">
                    <ul class="navid pull-left">
                        <li><a href="/">Home </a></li>
                        @foreach($menus as $key=> $menu)
                        <li><a href="#">{{$menu->name_tr}} <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="/post/{{$menu->post->id}}">{{$menu->post->title_tr}} </a></li>
                            </ul>

                        </li>
                        @endforeach
                        <li><a href="/about">Hakkımızda</a></li>
                        <li><a href="/contact">İletişim</a></li>
                    </ul>
                </nav>
                <!--end  nav menu-->
                <div class="search pull-right">
                    <div class="search-box">
                        <input type="text" class="form_control" placeholder="search" />
                        <span class="search-open"><i class="fa fa-search search"></i><i class="fa fa-close hidden close"></i></span>
                    </div>
                </div>
            </div>
            <!--end nav item -->
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
<!--End script  area -->
</body>
</html>
