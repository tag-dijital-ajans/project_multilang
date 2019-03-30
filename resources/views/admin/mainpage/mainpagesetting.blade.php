@extends ('admin/template')

@section('content')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Anasayfa Ayarları</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($mainpagesetting,['route'=>['mainpagesetting.update',1],'method'=>'PUT','class'=>'form-horizontal']) !!}


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
                        <div class="col-sm-10">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#textheader{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <div class="tab-pane @if($count == 0) active @endif p-3" id="textheader{{$langs}}" role="tabpanel">
                                        <p class="font-14 mb-0">
                                            <input class="form-control" type="text" value="{{$mainpagesetting->translate($langs)->textheader}}"  name="textheader[{{$langs}}]" >
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Anasayfa Metin</label>
                        <div class="col-sm-10">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#text{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <div class="tab-pane @if($count == 0) active @endif p-3" id="text{{$langs}}" role="tabpanel">
                                        <p class="font-14 mb-0">
                                            <textarea class="form-control" type="text" value="{{$mainpagesetting->translate($langs)->text}}"  name="text[{{$langs}}]" required></textarea>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
<div class="ortala" style="margin-left: 340px">
                    <div class="control-group">
                        <label class="control-label"> Bloglar </label>
                        <div class="controls">
                            <select name="yorumlar" class="span11">

                                @if($mainpagesetting->yorumlar=='evet')
                                    <option  value="evet" selected>Göster</option>
                                    <option  value="hayir" >Gösterme</option>
                                @else
                                    <option  value="evet" >Göster</option>
                                    <option  value="hayir" selected>Gösterme</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Projeler </label>
                        <div class="controls">
                            <select name="galeri" class="span11">

                                @if($mainpagesetting->galeri=='evet')
                                    <option  value="evet" selected>Göster</option>
                                    <option  value="hayir" >Gösterme</option>
                                @else
                                    <option  value="evet" >Göster</option>
                                    <option  value="hayir" selected>Gösterme</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">  Hizmetler </label>
                        <div class="controls">
                            <select name="blog" class="span11">

                                @if($mainpagesetting->blog=='evet')
                                    <option  value="evet" selected>Göster</option>
                                    <option  value="hayir" >Gösterme</option>
                                @else
                                    <option  value="evet" >Göster</option>
                                    <option  value="hayir" selected>Gösterme</option>
                                @endif
                            </select>
                        </div>
                    </div>
               {{--     <div class="control-group">
                        <label class="control-label">Anasayfa Menü </label>
                        <div class="controls">
                            <select name="menu" class="span11">

                                @if($mainpagesetting->menu=='evet')
                                    <option  value="evet" selected>Göster</option>
                                    <option  value="hayir" >Gösterme</option>
                                @else
                                    <option  value="evet" >Göster</option>
                                    <option  value="hayir" selected>Gösterme</option>
                                @endif
                            </select>
                        </div>
                    </div>--}}
</div>
<br/><br/><br/>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Güncelle</button>
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
    <script src="/admin/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection