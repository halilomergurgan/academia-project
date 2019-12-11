@extends('frontend.template')

@section('content')
    <div class="map_area">
        <div class="container-fulid">
            <div class="map">
                <!-- Start contact-map -->
                <div id="map" style="width: 100%; height: 450px"></div>
                <!-- End contact-map -->
            </div>
        </div>
    </div>
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- start  blog left -->
                <div class="col-md-4 col-sm-4">
                    <div class="contact-address">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Telefon</h4>
                                    {!! html_entity_decode(nl2br(e($contact[0]->phone))) !!}
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Email</h4>
                                <p>
                                    <span class="contact-emailto"><a href="#">{{$contact[0]->email}}</a></span>
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Address</h4>
                                <p>
									<span class="contact-emailto">
                                        {!! html_entity_decode(nl2br(e($contact[0]->address))) !!}
									</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="share_area">
        <div class="container">
            <div class="row">
                <div class="share-container">
                    <!-- single item brand -->
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="share-item">
                            <div class="brand_content content_left_fb">
                                <a href="http://facebook.com/{{$contact[0]->facebook}}" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                    <div class="icone_text">
                                        <h5>Takip Et</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end single item brand -->
                    <!-- single item brand -->
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="share-item">
                            <div class="brand_content content_left_tw">
                                <a href="http://twitter.com/{{$contact[0]->twitter}}" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                    <div class="icone_text">
                                        <h5>Takip Et</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end single item brand -->
                    <!-- single item brand -->
                    <div class="col-md-3 col-sm-6 col-lg-3" style="    width: 1000px; height: 250px;">
                        <div class="share-item">
                            <div class="brand_content content_left_in">
                                <a href="http://linkedin.com/in/{{$contact[0]->linkedin}}" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                    <div class="icone_text">
                                        <h5>Takip Et</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end single item brand -->
                </div>
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
                            <li>İletişim</li>
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
