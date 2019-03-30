@extends ('admin/template')

@section('content')
    <div class="row">
        <div style="float:left; margin: 15px 0 5px 0;"><a href="{{route('project.create')}}" class="btn btn-success">Yeni Proje</a></div>
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Projeler</h4>
                    <p class="text-muted m-b-30 font-14">
                    </p>

                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th  width="40px"> Görsel</th>
                            <th> Başlık</th>
                            <th> İçerik</th>
                            <th  width="40px"> Lokasyon</th>
                            <th> Türü</th>
                            <th  width="40px"> Müşteri</th>
                          {{--  <th> Tarih</th>--}}
                            <th width="5px">Düzenle</th>
                            <th width="5-">Sil</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td><img src="/{{$project->image}}" width="50" height="50"></td>
                                <td>{{$project->title}}</td>
                                <td>{!! $project->content !!}</td>
                                <td>{!! $project->location !!}</td>
                                <td>{{$project->type}}</td>
                                <td>{{$project->client}}</td>
                             {{--   <td>{{$project->date}}</td>--}}
                                <td><a href="{{route('project.edit', $project->id)}}" class="btn btn-success">Düzenle</a></td>
                                {!! Form::model($project,['route'=>['project.destroy',$project->id],'method'=>'DELETE']) !!}
                                <td class="center">
                                    <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger ">Sil</button>
                                </td>

                                {!! Form::close() !!}


                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->




@endsection

@section('css')


@endsection

@section('js')
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



        </script>
@endsection