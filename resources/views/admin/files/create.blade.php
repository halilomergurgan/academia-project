@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>File Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['files.store'],'method'=>'POST','files'=>'true','class'=>'widget-content nopadding']) !!}
                        {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">File Name :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="file_name" value="{{old('file_name')}}" />
                        </div>
                        @if($errors->has('file_name'))
                            <p class="alert alert-danger">
                                {{$errors->first('file_name')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">File</label>
                        <div class="controls">
                            <input type="file" class="span11" name="file_path" />
                            @if($errors->has('file_path'))
                                <p class="alert alert-danger">
                                    {{$errors->first('file_path')}}
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
@endsection
