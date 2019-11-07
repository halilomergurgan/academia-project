@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sub Menu Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['submenu.store'],'method'=>'POST','class'=>'widget-content nopadding']) !!}
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">Own Menu Name :</label>
                        <div class="controls">
                            <select name="menu_id" class="span11">
                                @foreach($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->name_tr}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('menu_id'))
                            <p class="alert alert-danger">
                                {{$errors->first('menu_id')}}
                            </p>
                        @endif
                    </div>

                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name_tr" value="{{old('name_tr')}}"/>
                        </div>
                        @if($errors->has('name_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('name_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Menu Name :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name_eng" value="{{old('name_eng')}}"/>
                        </div>
                        @if($errors->has('name_eng'))
                            <p class="alert alert-danger">
                                {{$errors->first('name_eng')}}
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
@endsection
