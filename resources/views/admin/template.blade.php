@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
@endguest
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/admin/css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="/admin/css/fullcalendar.css"/>
    <link rel="stylesheet" href="/admin/css/datepicker.css"/>
    <link rel="stylesheet" href="/admin/css/matrix-style.css"/>
    <link rel="stylesheet" href="/admin/css/matrix-media.css"/>
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/admin/css/jquery.gritter.css"/>
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="{{ url('/admin/dashboard') }}">Admin</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                Welcome {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        {{--        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>--}}

    </ul>
</div>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="{{ url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
        </li>
        <li><a href="{{ url('/admin/news')}}"><span>News/Haberler</span></a></li>
        <li><a href="{{ url('/admin/slider')}}"><span>Slider</span></a></li>
        <li><a href="{{ url('/admin/courses')}}"><span>Courses/Eğitimler</span></a></li>
        <li><a href="{{url('/admin/magazines')}}"><span>Magazines/Bültenler/Dergiler</span></a></li>
        <li><a href="{{url('/admin/articles')}}"><span>Articles/Makaleler</span></a></li>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Çoklu Menü İşlemleri</span> <span
                    class="label label-important">3</span></a>
            <ul>
                <li><a href="{{url('/admin/menu')}}"><span>Menus/Menuler</span></a></li>
                <li><a href="{{url('/admin/submenu')}}"><span>SubMenu</span></a></li>
                <li><a href="{{url('/admin/posts')}}"><span>Posts/Dinamik Sayfalar</span></a></li>
            </ul>
        </li>
        <li class="submenu active"><a href="#"><i class="icon icon-file"></i> <span>Tekli Menü İşlemleri</span> <span
                    class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/single')}}">Single/Tek Menü</a></li>
                <li><a href="{{url('/admin/single-post')}}">Single Post/Tek Menü İçeriği</a></li>
            </ul>
        </li>
        <li><a href="{{url('/admin/teachers')}}"><span>Teachers/Hocalar</span></a></li>

        <li class="submenu active"><a href="#"><i class="icon icon-file"></i> <span>File Browser/Dosyalar</span> <span
                    class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/files')}}">Files/Dosyalar</a></li>
                <li><a href="{{url('/admin/files/create')}}">File Add</a></li>
            </ul>
        </li>

        <li><a href="{{url('/admin/tasks')}}"><span>Tasks Calendar/Takvim</span></a></li>
        <li><a href="{{url('/admin/about')}}"><span>About/Hakkımızda</span></a></li>
        <li><a href="{{url('/admin/contact')}}"><span>Contact/İletişim</span></a></li>


        {{--        <li><a href="{{url('/admin/settings')}}"><span>Settings/Site Ayarları</span></a></li>--}}

    </ul>
</div>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i
                    class="icon-home"></i> Home</a></div>
    </div>

    <div class="container-fluid">
        @yield('content')

    </div>
</div>

<script src="/admin/js/excanvas.min.js"></script>
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/jquery.ui.custom.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/jquery.flot.min.js"></script>
<script src="/admin/js/jquery.flot.resize.min.js"></script>
<script src="/admin/js/jquery.peity.min.js"></script>
<script src="/admin/js/fullcalendar.min.js"></script>
<script src="/admin/js/matrix.js"></script>
<script src="/admin/js/matrix.dashboard.js"></script>
<script src="/admin/js/jquery.gritter.min.js"></script>
<script src="/admin/js/matrix.interface.js"></script>
<script src="/admin/js/matrix.chat.js"></script>
<script src="/admin/js/bootstrap-datepicker.js"></script>
<script src="/admin/js/jquery.validate.js"></script>
<script src="/admin/js/matrix.form_validation.js"></script>
<script src="/admin/js/jquery.wizard.js"></script>
<script src="/admin/js/jquery.uniform.js"></script>
<script src="/admin/js/select2.min.js"></script>
<script src="/admin/js/matrix.popover.js"></script>
<script src="/admin/js/jquery.dataTables.min.js"></script>
<script src="/admin/js/matrix.tables.js"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
            quick - actions_homepage

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@include('sweetalert::alert')
@yield('js')
</body>
</html>
