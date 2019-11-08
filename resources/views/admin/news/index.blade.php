@extends('admin.template')

@section('content')

    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('news.create')}}" class="btn btn-success"> News Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>News Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>English Title</th>
                    <th>Description TR</th>
                    <th>Description ENG</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($news as $new)
                    <tr class="gradeX">
                        <td>{{$new->title_tr}}</td>
                        <td>{{$new->title_eng}}</td>
                        <td>{{ Str::limit($new->description_tr, 100) }}</td>
                        <td>{{ Str::limit($new->description_eng, 100)}}</td>
                        <td><a href="{{$new->photo_path}}" target="_blank"><img src="{{$new->photo_path}}" height="100" width="100"></a></td>
                        <td class="center"><a href="{{route('news.edit',$new->id)}}" class="btn btn-success btn-mini">Edit</a>
                        </td>
                        {!! Form::model($news,['route'=>['news.destroy',$new->id],'method'=>'DELETE']) !!}
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
