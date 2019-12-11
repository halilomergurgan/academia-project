@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Teacher Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($teachers,['route'=>['teachers.update',$teachers->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Teacher Name&Surname :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="teach_name_tr" value="{{$teachers->teach_name_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Teacher Title : :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="teach_title" value="{{$teachers->teach_title}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Teacher Description TR</label>
                        <div class="controls">
                            {{ Form::textarea( 'teach_description_tr', $teachers->teach_description_tr, array('id' => 'teach_description_tr'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Web Site :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="web_site" value="{{$teachers->web_site}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Facebook :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="facebook" value="{{$teachers->facebook}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Twitter :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="twitter" value="{{$teachers->twitter}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">İnstagram :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="instagram" value="{{$teachers->instagram}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Linkedin :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="linkedin" value="{{$teachers->linkedin}}" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path"  value="{{$teachers->photo_path}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$teachers->photo_path}}" height="100" width="100" >
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
        CKEDITOR.replace( 'teach_description_tr' );
    </script>
@endsection
