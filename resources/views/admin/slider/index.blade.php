@extends('admin.template')

@section('content')

    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('slider.create')}}" class="btn btn-success"> Slider Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Slider Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>English Title</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($sliders as $slider)

                    <tr class="gradeX">
                        <td>{{$slider->title_tr}}</td>
                        <td>{{$slider->title_eng}}</td>
                        <td><a href="{{$slider->photo_path}}" target="_blank"><img src="{{$slider->photo_path}}" height="100" width="100"></a></td>
                        <td class="center"><a href="{{route('slider.edit',$slider->id)}}" class="btn btn-success btn-mini">Edit</a>
                        </td>
                        {!! Form::model($sliders,['route'=>['slider.destroy',$slider->id],'method'=>'DELETE']) !!}
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
