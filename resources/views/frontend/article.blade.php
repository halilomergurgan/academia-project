@extends('frontend.template')

@section('content')

    <div class="single_courcse">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="single_cos_item">
                        <h2 class="single_courcse_title">{{$article->title_tr}}</h2>
                        <br>
                        {!! html_entity_decode(nl2br(e($article->description_tr))) !!}
                    </div>
                </div>
                @if(isset($article->photo_path) || isset($article->embed_video_path))
                    <div class="col-md-4 col-sm-6">
                        @if(isset($article->embed_video_path))
                            <div class="met-box vedio_tutoria">
                                <figure style="width: 100%;">
                                    {!! html_entity_decode(nl2br(e($article->embed_video_path))) !!}
                                </figure>
                            </div>
                        @endif
                        @if($article->photo_path != '/storage/')
                            <div class="met-box">
                                <img src="{{$article->photo_path}}">
                            </div>
                        @endif
                            @if(isset($article->external_link))
                                <div class="met-box">
                                    <img src="{{$article->external_link}}">
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
