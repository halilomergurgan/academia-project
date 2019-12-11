@extends('admin.template')

@section('content')

    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('tasks.create')}}" class="btn btn-success"> Task Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Task Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Task Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tasks as $task)
                    <tr class="gradeX">
                        <td>{{$task->name}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->task_date}}</td>
                        <td class="center"><a href="{{route('tasks.edit',$task->id)}}" class="btn btn-success btn-mini">Edit</a>
                        </td>
                        {!! Form::model($tasks,['route'=>['tasks.destroy',$task->id],'method'=>'DELETE']) !!}
                        <td class="center">
                            <button type="submit" class="btn btn-danger btn-mini" onclick="if (!confirm('Are you sure?')) { return false }"><span>Delete</span></button>
                        </td>
                        {!! Form::close() !!}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="/admin/css/uniform.css"/>
    <link rel="stylesheet" href="/admin/css/select2.css"/>
@endsection

@section('js')

    <script src="/admin/js/excanvas.min.js"></script>
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/jquery.ui.custom.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <script src="/admin/js/matrix.tables.js"></script>
@endsection
