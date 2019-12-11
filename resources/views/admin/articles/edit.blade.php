@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Article Edit Page</h5>
                </div>

                <div class="widget-content nopadding">
                    {!! Form::model($articles,['route'=>['articles.update',$articles->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{$articles->title_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_tr', $articles->description_tr, array('id' => 'description_tr'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path"  value="{{$articles->photo_path}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$articles->photo_path}}" height="100" width="100" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Video ID :</label>
                        <p>For Exp: https://www.youtube.com/watch?v=<b>VIDEO_ID</b></p>
                        <div class="controls">
                            <input type="text" class="span11" name="embed_video_path" value="{{$articles->embed_video_path}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">External Link :</label>
                        <p>For Exp: http://www.sem.etu.edu.tr/sayfa/uzaktan-egitimler.html</p>
                        <div class="controls">
                            <input type="text" class="span11" name="external_link" value="{{$articles->external_link}}" />
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
