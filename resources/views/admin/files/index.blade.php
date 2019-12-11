@extends('admin.template')

@section('content')

    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{route('files.create')}}" class="btn btn-success"> File Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Files Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>File</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($files as $file)

                    <tr class="gradeX">
                        <td>{{$file->file_name}}</td>
                        @php
                            if ($file->extension == 'xls'){
                                $file->extension = 'xls';
                            }
                             if ($file->extension == 'word'){
                                $file->extension = 'word';
                            }
                             if ($file->extension == 'pdf'){
                                $file->extension = 'pdf';
                            }
                            if ($file->extension == 'xlsx'){
                                $file->extension = 'xls';
                            }
                             if ($file->extension == 'docx'){
                                $file->extension = 'word';
                            }
                        @endphp
                        <td style="text-align: center;">
                            <a href="{{$file->file_path}}" target="_blank"><img
                                    src="/admin/img/{{$file->extension}}.ico" style="height:50px; width:50px;">
                            </a>
                            <input type="text" value={{URL::to('/')}}{{$file->file_path}} id="myInput">
                            <button class="btn btn-info icon-copy" onclick="myFunction()"> Copy Link</button>
                        </td>

                        {!! Form::model($files,['route'=>['files.destroy',$file->id],'method'=>'DELETE']) !!}
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

    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
