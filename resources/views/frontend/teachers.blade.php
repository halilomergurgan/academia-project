@extends('frontend.template')

@section('content')
    <div class="teacher_area home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="module-title">
                            Deneyimli Öğretmen   <span>Kadromuz</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--start teacher single  item -->
                @foreach($teachers as $teacher)

                <div class="col-md-3 col-lg-4 col-sm-3" style="width: 5px;">
                    <div class="single_teacher_item" style="width: 350px; height: 400px;">
                        <div class="teacher_thumb">
                            @if($teacher->photo_path == '/storage/' || !isset($teacher->photo_path))
                                <img src="frontend/img/logo3.jpg" alt="" style="height: 350px; width: 350px;" />
                            @else
                                <img src="{{$teacher->photo_path}}" alt="" style="height: 350px; width: 350px;" />
                            @endif
                            <div class="thumb_text">
                                <h2>{{$teacher->teach_name_tr}}</h2>
                                <p>{{$teacher->teach_title}}</p>
                            </div>
                        </div>
                        <div class="teacher_content" style="padding: 0px 0px 0;">
                            <h2>{{$teacher->teach_name_tr}}</h2>
                            <span>{{$teacher->teach_title}}</span>
                            {!! strip_tags(htmlspecialchars_decode($teacher->teach_description_tr)) !!}
                            <div class="social_icons">
                                @if(isset($teacher->twitter))
                                    <a href="http://twitter.com/{{$teacher->twitter}}" class="tw"><i class="fa fa-twitter"></i></a>
                                @endif
                                @if(isset($teacher->facebook))
                                    <a href="http://facebook.com/{{$teacher->facebook}}" class="fb"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if(isset($teacher->linkedin))
                                    <a href="http://linkedin.com/in/{{$teacher->linkedin}}" class="lin"><i class="fa fa-linkedin"></i></a>
                                @endif
                                @if(isset($teacher->web_site))
                                    <a href="https://{{$teacher->web_site}}" class="fa fa-globe"><i class="fa fa-globe"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--End teacher single  item -->


            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
