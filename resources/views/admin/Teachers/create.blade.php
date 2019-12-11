@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Teacher Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['teachers.store'],'method'=>'POST','files'=>'true','class'=>'widget-content nopadding']) !!}
                        {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">Teacher Name&Surname  :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="teach_name_tr" value="{{old('teach_name_tr')}}" />
                        </div>
                        @if($errors->has('teach_name_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('teach_name_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Teacher Title :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="teach_title" value="{{old('teach_title')}}" />
                        </div>
                        @if($errors->has('teach_title'))
                            <p class="alert alert-danger">
                                {{$errors->first('teach_title')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Teacher Description TR</label>
                        <div class="controls">
                            <textarea name="teach_description_tr" id="teach_description_tr" >{{old('teach_description_tr')}}</textarea>
                        </div>
                        @if($errors->has('teach_description_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('teach_description_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Web Site :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="web_site" value="{{old('web_site')}}" />
                        </div>
                        @if($errors->has('web_site'))
                            <p class="alert alert-danger">
                                {{$errors->first('web_site')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Facebook :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="facebook" value="{{old('facebook')}}" />
                        </div>
                        @if($errors->has('facebook'))
                            <p class="alert alert-danger">
                                {{$errors->first('facebook')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Twitter :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="twitter" value="{{old('twitter')}}" />
                        </div>
                        @if($errors->has('twitter'))
                            <p class="alert alert-danger">
                                {{$errors->first('twitter')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">İntagram :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="instagram" value="{{old('instagram')}}" />
                        </div>
                        @if($errors->has('instagram'))
                            <p class="alert alert-danger">
                                {{$errors->first('instagram')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Linkedin :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="linkedin" value="{{old('linkedin')}}" />
                        </div>
                        @if($errors->has('linkedin'))
                            <p class="alert alert-danger">
                                {{$errors->first('linkedin')}}
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
