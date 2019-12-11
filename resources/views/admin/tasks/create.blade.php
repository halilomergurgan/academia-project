@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Task Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['tasks.store'],'method'=>'POST','class'=>'widget-content nopadding']) !!}
                        {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">Name :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name" value="{{old('name')}}" />
                        </div>
                        @if($errors->has('name'))
                            <p class="alert alert-danger">
                                {{$errors->first('name')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Description :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="description" value="{{old('description')}}" />
                        </div>
                        @if($errors->has('description'))
                            <p class="alert alert-danger">
                                {{$errors->first('description')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group" style="margin-left: 100px;">
                        <label class="control-label">Date :</label>
                        <div class="controls">
                            <input type="text"  class="date" name="task_date" value="{{old('task_date')}}" />
                        </div>
                        @if($errors->has('task_date'))
                            <p class="alert alert-danger">
                                {{$errors->first('task_date')}}
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
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>
@endsection
