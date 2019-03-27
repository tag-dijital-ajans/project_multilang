@extends ('admin/template')

@section('content')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Sayfa Düzenle : {{$page->title}}</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($page,(['route'=>['page.update',$page->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true'])) !!}




                    <div class="control-group">
                        <label class="control-label"> Sayfa Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title" value="{{$page->title}}"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Sayfa İçerik</label>
                        <div class="controls">
                            <textarea name="content" class="span11">{!! $page->content !!}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Sayfa Kapak Fotoğrafı Ekle </label>
                        <div class="controls">
                            <input type="file" name="photo"  class="span11"  />
                        </div>
                        <div><img width="300px" src="/{{$page->photo}}"></div>
                    </div>
                    <br/>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Sayfayı Güncelle</button>
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
    {{--<script src="/adminkurumsal/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>--}}
@endsection