@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Single Menü Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($single,['route'=>['single.update',$single->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name_tr" value="{{$single->name_tr}}" />
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
