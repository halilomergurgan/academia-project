@extends('admin.template')
@section('content')

    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>About Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>English Title</th>
                    <th>Description TR</th>
                    <th>Description ENG</th>
                    <th>Embed Video Path</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>


                    <tr class="gradeX">
                        <td>{{$about->title_tr}}</td>
                        <td>{{$about->title_eng}}</td>
                        <td>{{ Str::limit($about->description_tr, 100) }}</td>
                        <td>{{ Str::limit($about->description_eng, 100)}}</td>
                        <td>
                            <iframe width="250" height="200"
                                    src="https://www.youtube.com/embed/{{$about->embed_video_path}}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </td>
                        <td class="center"><a href="{{route('about.edit',$about->id)}}"
                                              class="btn btn-success btn-mini">Edit</a>
                        </td>
                    </tr>

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
