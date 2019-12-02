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
                            Uniplas'a <span> Hoşgeldiniz</span>
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
                            Note Uniplas <span> Kurslarımız</span>
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
                               </br> <a href="course/{{$course->id}}" class="">
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
                                <h2><a href="#">{{$new->title_eng}}</a></h2>
                                <p class="date">{{$new->created_at}}</p>
                                <h2>
                                    <a href="single-blog.html">  {{ Str::limit(strip_tags($new->title_tr, 100)) }} </a>
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
