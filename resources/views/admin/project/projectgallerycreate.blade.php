@extends ('admin/template')

@section('content')

    {!! Form::open(array('method'=>'POST','action'=>'ProjectGalerryController@store','class'=>'dropzone','files'=>'true','multiple'=>'true')) !!}


    {!! Form::close() !!}
@endsection

@section('css')
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endsection

@section('js')
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
@endsection