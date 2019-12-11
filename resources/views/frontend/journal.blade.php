@extends('frontend.template')

@section('content')

    <div class="single_courcse">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="single_cos_item">
                        <h2 class="single_courcse_title">{{$journal->title_tr}}</h2>
                        <br>
                        {!! html_entity_decode(nl2br(e($journal->description_tr))) !!}
                    </div>
                </div>
                @if(isset($journal->photo_path))
                    <div class="col-md-4 col-sm-6">

                        @if($journal->file != '/storage/')
                            <div class="met-box">
                                <img src="https://freeiconshop.com/wp-content/uploads/edd/document-download-outline.png" style="padding: 100px;">
                                <div class="priging_content">
                                    <br>
                                    <a href="{{$journal->file}}"> İndirmek İçin Tıklayınız </a>
                                </div>

                            </div>
                        @endif
                        @if($journal->photo_path != '/storage/')
                            <div class="met-box">
                                <img src="{{$journal->photo_path}}">
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
