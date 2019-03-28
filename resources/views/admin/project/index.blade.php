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
                            <th > Başlık</th>
                            <th > İçerik</th>
                            <th > Lokasyon</th>
                            <th > Türü</th>
                            <th > Müşteri</th>
                            <th > Tarih</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$project->title}}</td>
                                <td>{!! $project->content !!}</td>
                                <td>{!! $project->location !!}</td>
                                <td>{{$project->type}}</td>
                                <td>{{$project->client}}</td>
                                <td>{{$project->date}}</td>
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


@endsection