@extends('admin.template')
@section('content')
    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('menu.create')}}" class="btn btn-success"> Menu Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Menus Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Menu TR</th>
                    <th>Menu English</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($menus as $menu)
                    <tr class="gradeX">
                        <td>{{$menu->name_tr}}</td>
                        <td>{{$menu->name_eng}}</td>
                        <td class="center"><a href="{{route('menu.edit',$menu->id)}}"
                                              class="btn btn-success btn-mini">Edit</a>
                        </td>
                        {!! Form::model($menu,['route'=>['menu.destroy',$menu->id],'method'=>'DELETE']) !!}
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
