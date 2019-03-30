@extends ('admin/template')

@section('content')

    {!! Form::open(array('method'=>'POST','action'=>'GalleryController@store','class'=>'dropzone','files'=>'true','multiple'=>'true')) !!}
{{--
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
        <div class="col-sm-10">
            <ul class="nav nav-tabs" role="tablist">
                @foreach(config('translatable.locales') as $count => $langs )

                    <li class="nav-item ">
                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#title{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach(config('translatable.locales') as $count => $langs )

                    <div class="tab-pane @if($count == 0) active @endif p-3" id="title{{$langs}}" role="tabpanel">
                        <p class="font-14 mb-0">
                            <input class="form-control" type="text"  name="title[{{$langs}}]" required>
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary waves-effect waves-light">Ekle</button>
    </div>--}}
    {!! Form::close() !!}


@endsection

@section('css')
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endsection


@section('js')


    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
@endsection