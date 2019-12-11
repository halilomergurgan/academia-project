@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sub Menu Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($subMenu,['route'=>['submenu.update',$subMenu->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <div class="controls">
                                <select name="menu_id" class="span11">
                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}" {{$menu->id == old('menu_id',$subMenu->menu_id) ? 'selected' : $menu->name_tr }}>{{$menu->name_tr}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="name_tr" value="{{$subMenu->name_tr}}"/>
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
