@extends('admin.template')

@section('content')
    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Contact Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($contact,['route'=>['contact.update',$contact->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Phone:</label>
                        <div class="controls">
                            {{ Form::textarea( 'phone', $contact->phone, array('id' => 'phone'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">E-Mail :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="email" value="{{$contact->email}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Address :</label>
                        <div class="controls">
                            {{ Form::textarea( 'address', $contact->address, array('id' => 'address'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Facebook :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="facebook" value="{{$contact->facebook}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Twitter :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="twitter" value="{{$contact->twitter}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">İntagram :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="instagram" value="{{$contact->instagram}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Linkedin :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="linkedin" value="{{$contact->linkedin}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Enlem :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="latitude"
                                   value="{{$contact->latitude}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Boylam :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="longitude"
                                   value="{{$contact->longitude}}"/>
                        </div>
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
    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'phone' );
    </script>
    <script>
        CKEDITOR.replace( 'address' );
    </script>
@endsection
