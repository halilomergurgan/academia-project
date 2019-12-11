@extends('admin.template')
@section('content')
    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('courses.create')}}" class="btn btn-success"> Course Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Course Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>Description TR</th>
                    <th>Photo</th>
                    <th>Embed Video Path</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($courses as $course)
                    <tr class="gradeX">
                        <td>{{$course->title_tr}}</td>
                        <td>{{ Str::limit($course->description_tr, 100) }}</td>
                        <td><a href="{{$course->photo_path}}" target="_blank"><img src="{{$course->photo_path}}"
                                                                                   height="100" width="100"></a></td>
                        <td>
                            <iframe width="250" height="200"
                                    src="https://www.youtube.com/embed/{{$course->embed_video_path}}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </td>
                        <td class="center"><a href="{{route('courses.edit',$course->id)}}"
                                              class="btn btn-success btn-mini">Edit</a>
                        </td>
                        {!! Form::model($courses,['route'=>['courses.destroy',$course->id],'method'=>'DELETE']) !!}
                        <td class="center">
                            <button type="submit" class="btn btn-danger btn-mini"
                                    onclick="if (!confirm('Are you sure?')) { return false }"><span>Delete</span>
                            </button>
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
