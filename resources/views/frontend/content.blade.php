@extends('frontend.template')

@section('content')
    </br>
    <div class="container">
        @foreach($sliders as $key => $slider)
            <div class="mySlides">
                <img src="{{$slider->photo_path}}" style="width:100%; height: 500px;">
            </div>
        @endforeach
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        <div class="caption-container">
            <p id="caption"></p>
        </div>
        <div class="row" style="margin-right: -15px; margin-left: 0;">
            @foreach($sliders as $key => $slider)
                <div class="column">
                    <img class="demo cursor" src="{{$slider->photo_path}}" style="width:199px; height: 110px;; "
                         onclick="currentSlide({{$slider->id}})" alt="{{$slider->title_tr}}">
                </div>
            @endforeach
        </div>
    </div>
    {{--    <div class="container">--}}
    {{--        <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
    {{--            <!-- Indicators -->--}}
    {{--            <ol class="carousel-indicators">--}}
    {{--                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
    {{--                <li data-target="#myCarousel" data-slide-to="1"></li>--}}
    {{--                <li data-target="#myCarousel" data-slide-to="2"></li>--}}
    {{--            </ol>--}}

    {{--            <!-- Wrapper for slides -->--}}
    {{--            <div class="carousel-inner">--}}
    {{--                <div class="item active">--}}
    {{--                    <img src="frontend/img/logo3.jpg" alt="Los Angeles" style="width:100%;">--}}
    {{--                </div>--}}
    {{--                @foreach($sliders as $slider)--}}
    {{--                <div class="item">--}}
    {{--                    <img src="{{$slider->photo_path}}" alt="New york" style="width:100%;">--}}
    {{--                </div>--}}
    {{--                    @endforeach--}}
    {{--            </div>--}}

    {{--            <!-- Left and right controls -->--}}
    {{--            <a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
    {{--                <span class="glyphicon glyphicon-chevron-left"></span>--}}
    {{--                <span class="sr-only">Previous</span>--}}
    {{--            </a>--}}
    {{--            <a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
    {{--                <span class="glyphicon glyphicon-chevron-right"></span>--}}
    {{--                <span class="sr-only">Next</span>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!--Start about  area -->
    <div class="about_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="content-inner">
                        <h3 class="module-title">
                            {!! html_entity_decode(nl2br(e($about[0]->title_tr))) !!}
                        </h3>
                        <div class="content-desc">
                            {!! html_entity_decode(nl2br(e($about[0]->description_tr))) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end about  area -->
    <!--start courses  area -->
    <div class="courses_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="module-title">
                            Note Uniplas <span> Güncel Eğİtİmler</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--start course single  item -->
                @foreach($courses as $course)
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="course_item">
                            <div class="courses_thumb">
                                <a href=""><img style="width: 280px; height: 200px;" src="{{$course->photo_path}}"
                                                alt=""/></a>

                            </div>
                            <div class="courses_content">
                                <h2><a href="#">{{$course->title_tr}}</a></h2>
                                {{--                                {{html_entity_decode(nl2br(e($course->description_tr)))}}--}}
                                {!!\Illuminate\Support\Str::limit($course->description_tr,100)  !!}
                                </br>
                                <a href="course/{{$course->id}}" class="">
                                    Devamını Oku ...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--end courses  area -->
    <!--start priging  area -->
    <div class="priging_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h3 class="module-title">
                                    Note Uniplas <span>Bülten</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="hidden-md col-sm-6 hidden-lg">
                            <div class="service_item">
                                <span class="lnr lnr-apartment"></span>
                            </div>
                        </div>
                        <!-- end service single item -->
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($magazines as $magazine)
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="priging_item">
                                    <div class="priging_thumb">
                                        <a href="/journal/{{$magazine->id}}">
                                            <div class="atvImg">
                                                <div class="atvImg-layer" data-img="{{$magazine->photo_path}}"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="priging_content">
                                        <br>
                                        <a href="/journal/{{$magazine->id}}">  {{ Str::limit(strip_tags($magazine->title_tr, 100)) }} </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end single item priging -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end priging  area -->
    <!--start news  area -->
    <div class="news_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="module-title">
                            Bizden <span>Haberler</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--start single news  item -->
                @foreach($news as $new)
                    <div style="width: 100%" class="col-md-3 col-sm-6">
                        <div class="single_news_item">
                            <div class="news_thumb">
                                <a href="#"><img style="width: 280px; height: 200px;" src="{{$new->photo_path}}"
                                                 alt=""/></a>
                            </div>
                            <div class="news_content">

                                <p class="date">{{$new->created_at}}</p>
                                <h2><a href="#">{{$new->title_tr}}</a></h2>

                                {!!\Illuminate\Support\Str::limit($new->description_tr,100)  !!}
                                </br>
                                <a href="news/{{$new->id}}" class="">
                                    Devamını Oku ...</a>

                            </div>
                        </div>

                    </div>
                    <!--end single news  item -->
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
