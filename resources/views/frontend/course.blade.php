@extends('frontend.template')

@section('content')

    <div class="single_courcse">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="single_cos_item">
                        <h2 class="single_courcse_title">{{$course->title_tr}}</h2>
                        <br>
                        {!! html_entity_decode(nl2br(e($course->description_tr))) !!}
                    </div>
                </div>
                @if(isset($course->photo_path) || isset($course->embed_video_path))
                    <div class="col-md-4 col-sm-6">
                        @if(isset($course->embed_video_path))
                        <div class="met-box vedio_tutoria">
                            <figure style="width: 100%;">
                                {!! html_entity_decode(nl2br(e($course->embed_video_path))) !!}
                            </figure>
                        </div>
                        @endif
                        @if($course->photo_path != '/storage/')
                            <div class="met-box">
                                <img src="{{$course->photo_path}}">
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
