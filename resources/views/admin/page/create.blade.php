@extends ('admin/template')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Yeni Sayfa</h4>

                    {!! Form::open(['route'=>'page.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
                        <div class="col-sm-10">
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        @foreach(config('translatable.locales') as $count => $langs )
                            <li class="nav-item waves-effect waves-light">
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

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">İçerik</label>
                        <div class="col-sm-10">


                            <ul class="nav nav-pills nav-justified" role="tablist">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#content{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <div class="tab-pane @if($count == 0) active @endif p-3" id="content{{$langs}}" role="tabpanel">
                                        <p class="font-14 mb-0">
                                            <textarea class="form-control" type="text"  name="content[{{$langs}}]" required></textarea>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                      </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Sayfa Görseli</label>
                        <div class="col-sm-10">
                    <div class="control-group">
                        <label class="control-label"> Fotoğraf</label>
                        <div class="controls">
                            <input type="file" name="photo"  class="span11"  />
                        </div>
                    </div>
                    <br/>
                    <div class="form-actions">
                        <button type="submit" type="submit" class="btn btn-primary waves-effect waves-light">Sayfa Ekle</button>
                    </div>
                    {!! Form::close() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>


@endsection

@section('css')

@endsection


@section('js')
    <script src="/admin/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection