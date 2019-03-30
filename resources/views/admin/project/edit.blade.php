@extends ('admin/template')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title"> Güncelle</h4>

                    {!! Form::model($project,['route'=>['project.update',$project->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true']) !!}
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
                                            <input class="form-control" type="text" value="{{$project->translate($langs)->title}}"  name="title[{{$langs}}]" required>
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
                                <textarea class="form-control" type="text"  name="content[{{$langs}}]" required>
                                                {{$project->translate($langs)->content}}
                                            </textarea>

                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Lokasyon</label>
                        <div class="col-sm-10">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#location{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <div class="tab-pane @if($count == 0) active @endif p-3" id="type{{$langs}}" role="tabpanel">
                                        <p class="font-14 mb-0">
                                            <input class="form-control" type="text" value="{{$project->translate($langs)->location}}"  name="location[{{$langs}}]" required>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Türü</label>
                        <div class="col-sm-10">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#type{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <div class="tab-pane @if($count == 0) active @endif p-3" id="type{{$langs}}" role="tabpanel">
                                        <p class="font-14 mb-0">
                                            <input class="form-control" type="text" value="{{$project->translate($langs)->type}}"  name="type[{{$langs}}]" required>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Müşteri</label>
                        <div class="col-sm-10">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link @if($count == 0) active @endif" data-toggle="tab" href="#client{{$langs}}" aria-controls="{{$langs}}" role="tab">{{ $langs }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach(config('translatable.locales') as $count => $langs )
                                    <div class="tab-pane @if($count == 0) active @endif p-3" id="client{{$langs}}" role="tabpanel">
                                        <p class="font-14 mb-0">
                                            <input class="form-control" type="text" value="{{$project->translate($langs)->client}}"  name="client[{{$langs}}]" required>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label"> Tarih</label>
                        <div class="controls ">
                            <input type="text" class="span11" value="{{$project->date}}" name="date"/>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Proje Görseli</label>
                        <div class="col-sm-10">
                            <div class="control-group">
                                <label class="control-label"> </label>
                                <div class="controls">
                                    <input type="file" name="image"  class="span11"  />
                                </div>
                                <img src="/{{$project->photo}}" value="{{$project->photo}}"width="200px">
                            </div>
                            <br/>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Güncelle</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div style="clear:both;"></div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
                    <h5>Resim Galerisi</h5>
                </div>
                <div class="widget-content">
                    <ul class="thumbnails">


                        @foreach($galleries as $gallery)
                            <li class="span2">
                                {!! Form::model($gallery,['route'=>['gallery.destroy',$gallery->id],'method'=>'DELETE']) !!}
                                <img src="/{{$gallery->image}}" alt="" width="240" height="40" >
                                <br>
                                <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>


                                {!! Form::close() !!}



                            </li>
                        @endforeach

                        {{--@foreach($resimler as $resim)
                            <li class="span2"> <a> <img src="/{{$resim->resim}}" alt="" width="240" height="40" > </a>
                                <div class="actions"> <a title="" class="" href="{{route('projeresim.sil',$resim->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Resim Silinsin Mi?"><i class="icon-trash"></i></a> <a class="lightbox_trigger" href="/{{$resim->resim_yolu}}"><i class="icon-search"></i></a> </div>
                            </li>
                        @endforeach--}}



                    </ul>

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