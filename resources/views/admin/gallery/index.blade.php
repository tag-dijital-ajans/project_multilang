@extends ('admin/template')

@section('content')
<<<<<<< HEAD
    <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('gallery.create')}}" class="btn btn-success">Resim Yükle</a></div>
    <div style="clear:both;"></div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
                    <h5>Resim Galerisi</h5>
                </div>
=======
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Galeriye Fotoğraf Yükle</h4>
                    <p class="text-muted m-b-30 font-14">Tıklayın veya sürükle bırak ile fotoğrafları ekleyin.
                        Daha sonra yükle ile devam edin!
                    </p>

                    <div class="m-b-30">

                    {!! Form::open(array('url'=>'admin/gallery/store','method'=>'POST','class'=>'', 'files'=>true)) !!}

                        <div class="fallback">
                            {!! Form::file('images[]', array('multiple'=>true , 'required' =>'required')) !!}

                        </div>

                    </div>
                    <div class="text-center m-t-15">
                        {!! Form::submit('Yükle', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}



                </div>
            </div>
        </div>
    </div>

    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <table class="table table-dark">

                        <tbody>
                        @foreach($galleries->chunk(4) as $array)
                            <tr>
                                @foreach($array as $gallery)
                                    <th width="33%">
                                        <img src="/{{$gallery->image}}" alt="" width="240" >
                                        <br>
                                        {!! Form::model($gallery,['route'=>['gallery.destroy',$gallery->id],'method'=>'DELETE']) !!}
                                        <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>
                                        {!! Form::close() !!}

                                    </th>
                                @endforeach
>>>>>>> master

                <div class="widget-content">
                    <ul class="thumbnails">
                        @foreach($galleries as $gallery)
                            <li class="span2"> <a> <img src="/{{$gallery->image}}" alt="" width="240" height="240" > </a>
                                <div class="actions"> <a title="" class="" href="{{route('gallery.destroy',$gallery->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Resim Silinsin Mi?"><i class="icon-trash"></i></a> <a class="lightbox_trigger" href="/{{$gallery->image}}"><i class="icon-search"></i></a> </div>
                            </li>
                            {{--<td>{{$gallery->title}}</td>--}}
                        @endforeach
<<<<<<< HEAD

                    </ul>
=======
                        </tbody>
                    </table>
>>>>>>> master




                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    </div>
=======
>>>>>>> master


@endsection

@section('css')

    <!-- Dropzone css -->
    <link href="/admin/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
@endsection

@section('js')
<<<<<<< HEAD
    <script>

        (function(window, $, undefined) {
            var Laravel = {
                initialize: function() {
                    this.methodLinks = $('a[data-method]');
                    this.token = $('a[data-token]');
                    this.registerEvents();
                },
                registerEvents: function() {
                    this.methodLinks.on('click', this.handleMethod);
                },
                handleMethod: function(e) {
                    e.preventDefault()
                    var link = $(this)
                    var httpMethod = link.data('method').toUpperCase()
                    var form

                    if ($.inArray(httpMethod, ['PUT', 'DELETE']) === -1) {
                        return false
                    }
                    Laravel
                        .verifyConfirm(link)
                        .done(function () {
                            form = Laravel.createForm(link)
                            form.submit()
                        })
                },
                verifyConfirm: function(link) {
                    var confirm = new $.Deferred()
                    var userResponse = window.confirm(link.data('confirm'))
                    if (userResponse) {
                        confirm.resolve(link)
                    } else {
                        confirm.reject(link);
                    }
                    return confirm.promise()
                },
                createForm: function(link) {
                    var form =
                        $('<form>', {
                            'method': 'POST',
                            'action': link.attr('href')
                        });
                    var token =
                        $('<input>', {
                            'type': 'hidden',
                            'name': '_token',
                            'value': link.data('token')
                        });
                    var hiddenInput =
                        $('<input>', {
                            'name': '_method',
                            'type': 'hidden',
                            'value': link.data('method')
                        });
                    return form.append(token, hiddenInput)
                        .appendTo('body');
                }
            };
            Laravel.initialize();
        })(window, jQuery);

=======
    <!-- Dropzone js -->
    <script src="/admin/plugins/dropzone/dist/dropzone.js"></script>
    <!-- App js -->
    <script src="/admin/js/app.js"></script>
>>>>>>> master

@endsection