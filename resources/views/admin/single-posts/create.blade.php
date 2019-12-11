@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Post Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['single-post.store'],'method'=>'POST','files'=>'true','class'=>'widget-content nopadding']) !!}
                        {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <select name="single_menu_id" class="span11">
                                @foreach($menus as $menu)
                                    <option value="{{$menu->id}}">{{$menu->name_tr}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('single_menu_id'))
                            <p class="alert alert-danger">
                                {{$errors->first('single_menu_id')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Articles Name :</label>
                        <span>Eğer makale seçmek isterseniz kullanınız. Hem makale hemde içerik girmeyiniz</span>
                        <div class="controls">
                            <select name="article_id" class="span11">
                                <option selected disabled="" >Seçiniz</option>
                                @foreach($articles as $article)
                                    <option value="{{ $article->id }}">{{ $article->title_tr }}</option> <!-- put actual attribute here... -->
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('article_id'))
                            <p class="alert alert-danger">
                                {{$errors->first('article_id')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{old('title_tr')}}" />
                        </div>
                        @if($errors->has('title_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('title_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            <textarea style="height: 500px;" name="description_tr" id="description_tr" >{{old('description_tr')}}</textarea>
                        </div>
                        @if($errors->has('description_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('description_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path" />
                            @if($errors->has('photo_path'))
                                <p class="alert alert-danger">
                                    {{$errors->first('photo_path')}}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Video Embed Path :</label>
                        <p>For Exp: https://www.youtube.com/watch?v=<b>VIDEO_ID</b></p>
                        <div class="controls">
                            <input type="text" class="span11"  name="embed_video_path" value="{{old('embed_video_path')}}" />
                        </div>
                        @if($errors->has('embed_video_path'))
                            <p class="alert alert-danger">
                                {{$errors->first('embed_video_path')}}
                            </p>
                        @endif
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description_tr' );
</script>
<script>
    CKEDITOR.replace( 'description_eng' );
</script>

@endsection
