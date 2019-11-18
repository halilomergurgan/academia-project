@extends('frontend.template')

@section('content')
    <div class="slide_wrap_area">
        <!-- HOME SLIDER -->
        <div class="slider-wrap home-1-slider" id="home">
            <div id="mainSlider" class="nivoSlider slider-image">
                <?php $i = 0; ?>
                @foreach($sliders as $key => $slider)
                    <img src="{{$slider->photo_path}}" style="width: 110px; height: 610px;" alt="main slider" title="#htmlcaption{{$i++}}"/>
                @endforeach
            </div>
            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide1-text slide-text">
                                <div class="middle-text">
                                    <div class="left_sidet1">
                                        <div class="cap-title wow slideInRight" data-wow-duration=".9s"
                                             data-wow-delay="0s">
                                            <h1 style="color: #0e90d2;">{{$slider->title_tr}} </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HOME SLIDER -->
    </div>
    <!--Start about  area -->
    <div class="about_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="content-inner">
                        <h3 class="module-title">
                            Welcome to <span> Academia</span>
                        </h3>
                        <div class="content-desc">
                            {!! html_entity_decode(nl2br(e($about[0]->description_tr))) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="video-wrapper pull-right">
                        <iframe width="560" height="500"
                                src="https://www.youtube.com/embed/{{$about[0]->embed_video_path}}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
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
                            Explore all the <span> Courses</span>
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
                                <h2><a href="#">{{$course->title_eng}}</a></h2>
                                {{ Str::limit(strip_tags($course->description_tr, 100)) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--end courses  area -->

    <!--start offer  area -->
    <div class="offer_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="video-wrapper pull-right">
                        <iframe width="560" height="500"
                                src="https://www.youtube.com/embed/{{$about[0]->embed_video_path}}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="title">
                        <h3 class="offer-title" style="color: #0F99DE;">
                            Like what you're learning <span> Get started today!</span>
                        </h3>
                    </div>
                    <div class="offer_item">
                        <div class="offer_content">
                            <p style="color: #0F99DE;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end offer  area -->
    <!--start priging  area -->
    <div class="priging_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h3 class="module-title">
                                    Develop skills with <span>Academia</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- service single item -->
                        <div class="col-md-12 col-sm-6 col-lg-12">
                            <div class="service_item">
                                <span class="lnr lnr-film-play"></span>
                                <h2>Over 20,640 Free Tutorial</h2>
                                <p>We have step by step tutorials & instructions</p>
                            </div>
                        </div>
                        <!-- end service single item -->
                        <!-- service single item -->
                        <div class="col-md-12 col-sm-6 col-lg-12">
                            <div class="service_item">
                                <span class="lnr lnr-camera-video"></span>
                                <h2>Over 20,640 Free Tutorial</h2>
                                <p>We have step by step tutorials & instructions </p>
                            </div>
                        </div>
                        <!-- end service single item -->
                        <!-- service single item -->
                        <div class="col-md-12 col-sm-6 col-lg-12">
                            <div class="service_item">
                                <span class="lnr lnr-book"></span>
                                <h2>Over 180k Books Available</h2>
                                <p>We have step by step tutorials & instructions</p>
                            </div>
                        </div>
                        <!-- end service single item -->
                        <!-- service single item -->
                        <div class="hidden-md col-sm-6 hidden-lg">
                            <div class="service_item">
                                <span class="lnr lnr-apartment"></span>
                                <h2>Over 180k Books Available</h2>
                                <p>We have step by step tutorials & instructions</p>
                            </div>
                        </div>
                        <!-- end service single item -->
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h3 class="module-title title2">
                                   Dergilerimiz
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- single item priging -->

                        @foreach($news as $new)
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="priging_item">
                                    <div class="priging_thumb">
                                        <a href="#">
                                            <div class="atvImg">
                                                <div class="atvImg-layer" data-img="{{$new->photo_path}}"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="priging_content">
                                        <h2>{{$new->title_tr}}</h2>
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
                            Latest <span>News</span>
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
                                <h2><a href="#">{{$new->title_eng}}</a></h2>
                                <p class="date">{{$new->created_at}}</p>
                                <h2>
                                    <a href="single-blog.html">  {{ Str::limit(strip_tags($new->description_eng, 100)) }} </a>
                                </h2>
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
