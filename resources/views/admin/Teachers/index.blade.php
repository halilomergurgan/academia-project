@extends('admin.template')

@section('content')

    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('teachers.create')}}" class="btn btn-success"> Teacher Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Teachers Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Teacher Name&Surname</th>
                    <th>Teacher Title</th>
                    <th>Teacher Description TR</th>
                    <th>Web Site</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>İntagtam</th>
                    <th>Linkedin</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($teachers as $teacher)
                    <tr class="gradeX">
                        <td>{{$teacher->teach_name_tr}}</td>
                        <td>{{$teacher->teach_title}}</td>
                        <td>{{ Str::limit($teacher->teach_description_tr, 100) }}</td>
                        <td>{{$teacher->web_site}}</td>
                        <td>{{$teacher->facebook}}</td>
                        <td>{{$teacher->twitter}}</td>
                        <td>{{$teacher->instagram}}</td>
                        <td>{{$teacher->linkedin}}</td>
                        <td><a href="{{$teacher->photo_path}}" target="_blank"><img src="{{$teacher->photo_path}}" height="100" width="100"></a></td>
                        <td class="center"><a href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-success btn-mini">Edit</a>
                        </td>
                        {!! Form::model($teachers,['route'=>['teachers.destroy',$teacher->id],'method'=>'DELETE']) !!}
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
