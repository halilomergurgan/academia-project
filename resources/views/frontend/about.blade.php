@extends('frontend.template')

@section('content')

    <div class="about_area page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h3 class="module-title about_titlea">
                            {!! html_entity_decode(nl2br(e($about[0]->title_tr))) !!}

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="content-inner">
                        <div class="content-desc">
                            <div class="">
                                {!! html_entity_decode(nl2br(e($about[0]->description_tr))) !!}

                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6 col-sm-6">--}}
{{--                    <div class="video-wrapper pull-right">--}}
{{--                        <iframe width="560" height="500"--}}
{{--                                src="https://www.youtube.com/embed/{{$about[0]->embed_video_path}}" frameborder="0"--}}
{{--                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                                allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="/">Anasayfa</a> <i class="fa fa-angle-right"></i></li>
                            <li>Hakkımızda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
