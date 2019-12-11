@extends('frontend.template')

@section('content')

    <div class="single_courcse">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="single_cos_item">
                        <h2 class="single_courcse_title">{{$post->title_tr}}</h2>
                        <br>
                        @if(!isset($post->article_id))
                        {!! html_entity_decode(nl2br(e($post->description_tr))) !!}
                            @else
                            {!! html_entity_decode(nl2br(e($post->article->description_tr))) !!}
                        @endif
                    </div>
                </div>
                @if(isset($post->photo_path) || isset($post->embed_video_path))
                    <div class="col-md-4 col-sm-6">
                        @if(isset($post->embed_video_path))
                            <div class="met-box vedio_tutoria">
                                <figure style="width: 100%;">
                                    {!! html_entity_decode(nl2br(e($post->embed_video_path))) !!}
                                </figure>
                            </div>
                        @endif
                        @if($post->photo_path != '/storage/')
                            <div class="met-box">
                                <img src="{{$post->photo_path}}">
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
