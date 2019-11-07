@extends('admin.template')
@section('content')

    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Contact Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Phone</th>
                    <th>E-Mail</th>
                    <th>Address</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>İntagtam</th>
                    <th>Linkedin</th>
                    <th>Enlem</th>
                    <th>Boylam</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="gradeX">
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->address}}</td>
                        <td>{{$contact->facebook}}</td>
                        <td>{{$contact->twitter}}</td>
                        <td>{{$contact->instagram}}</td>
                        <td>{{$contact->linkedin}}</td>
                        <td>{{$contact->latitude}}</td>
                        <td>{{$contact->longitude}}</td>

                        <td class="center"><a href="{{route('contact.edit',$contact->id)}}"
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
