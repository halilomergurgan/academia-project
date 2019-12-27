@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Course Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($posts,['route'=>['single-post.update',$posts->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <div class="controls">
                                <select name="single_menu_id" class="span11">
                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}" {{$menu->id == old('single_menu_id',$posts->single_menu_id) ? 'selected' : $menu->name_tr }}>{{$menu->name_tr}} </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Sub Menu Name :</label>
                        <span>Eğer makale seçmek isterseniz kullanınız. Hem makale hemde içerik girmeyiniz</span>
                        <div class="controls">
                            <div class="controls">
                                <select name="article_id" class="span11">
                                    <option selected disabled="" >Seçiniz</option>

                                    @foreach($articles as $article)

                                        <option value="{{$article->id}}" {{$article->id == old('article_id',$posts->article_id) ? 'selected' : $article->title_tr }}>{{$article->title_tr}} </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{$posts->title_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Title :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="title_eng" value="{{$posts->title_eng}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_tr', $posts->description_tr, array('id' => 'description_tr'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_eng', $posts->description_eng, array('id' => 'description_eng'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path"  value="{{$posts->photo_path}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$posts->photo_path}}" height="100" width="100" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Video ID :</label>
                        <p>For Exp: https://www.youtube.com/watch?v=<b>VIDEO_ID</b></p>
                        <div class="controls">
                            <input type="text" class="span11" name="embed_video_path" value="{{$posts->embed_video_path}}" />
                        </div>
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
