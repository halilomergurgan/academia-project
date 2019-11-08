@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Post Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['posts.store'],'method'=>'POST','files'=>'true','class'=>'widget-content nopadding']) !!}
                        {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
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
                        <label class="control-label">Turkish Sub Menu Name :</label>
                        <div class="controls">
                            <select name="submenu_id" class="span11">
                                @foreach($subMenus as $subMenu)
                                    <option value="{{$subMenu->id}}">{{$subMenu->name_tr}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('submenu_id'))
                            <p class="alert alert-danger">
                                {{$errors->first('submenu_id')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{old('title_tr')}}" />
                        </div>
                        @if($errors->has('title_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('title_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Title :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="title_eng" value="{{old('title_eng')}}" />
                        </div>
                        @if($errors->has('title_eng'))
                            <p class="alert alert-danger">
                                {{$errors->first('title_eng')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            <textarea name="description_tr" id="description_tr" >{{old('description_tr')}}</textarea>
                        </div>
                        @if($errors->has('description_tr'))
                            <p class="alert alert-danger">
                                {{$errors->first('description_tr')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Description</label>
                        <div class="controls">
                            <textarea name="description_eng" id="description_eng" >{{old('description_eng')}}</textarea>
                        </div>
                        @if($errors->has('description_eng'))
                            <p class="alert alert-danger">
                                {{$errors->first('description_eng')}}
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
                    <div class="control-group">
                        <label class="control-label">Video Embed Path :</label>
                        <p>For Exp: https://www.youtube.com/watch?v=<b>VIDEO_ID</b></p>
                        <div class="controls">
                            <input type="text" class="span11"  name="embed_video_path" value="{{old('embed_video_path')}}" />
                        </div>
                        @if($errors->has('embed_video_path'))
                            <p class="alert alert-danger">
                                {{$errors->first('embed_video_path')}}
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection
