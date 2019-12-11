@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Course Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($posts,['route'=>['posts.update',$posts->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Menu Name :</label>
                        <div class="controls">
                            <div class="controls">
                                <select name="menu_id" class="span11">
                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}" {{$menu->id == old('menu_id',$posts->menu_id) ? 'selected' : $menu->name_tr }}>{{$menu->name_tr}} </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Sub Menu Name :</label>
                        <div class="controls">
                            <div class="controls">
                                <select name="submenu_id" class="span11">
                                    @foreach($subMenus as $subMenu)
                                        <option value="{{$subMenu->id}}" {{$subMenu->id == old('submenu_id',$posts->submenu_id) ? 'selected' : $subMenu->name_tr }}>{{$subMenu->name_tr}} </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{$posts->title_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_tr', $posts->description_tr, array('id' => 'description_tr'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path"  value="{{$posts->photo_path}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$posts->photo_path}}" height="100" width="100" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Video ID :</label>
                        <p>For Exp: https://www.youtube.com/watch?v=<b>VIDEO_ID</b></p>
                        <div class="controls">
                            <input type="text" class="span11" name="embed_video_path" value="{{$posts->embed_video_path}}" />
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
