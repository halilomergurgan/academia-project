@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Course Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($menu,['route'=>['menu.update',$menu->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name_tr" value="{{$menu->name_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Menu Name :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="name_eng" value="{{$menu->name_eng}}"/>
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection
