@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Magazine Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($magazines,['route'=>['magazines.update',$magazines->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{$magazines->title_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_tr', $magazines->description_tr, array('id' => 'description_tr'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path"  value="{{$magazines->photo_path}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$magazines->photo_path}}" height="100" width="100" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Dosya(Word-Pdf-Excel)</label>
                        <div class="controls">
                            <input type="file" class="span11" name="file"  value="{{$magazines->file}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$magazines->file}}" height="100" width="100" >
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
