@extends ('admin/template')

@section('content')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('page.create')}}" class="btn btn-success">Yeni Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Sayfa Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr class="gradeX">
                        <td>{{$page->title}}</td>
                      {{--  <td>--}}
                        <td>{!! $page->content !!}</td>
{{--

{!! str_limit(strip_tags($page->content),$limit=100,$end='...') !!}

                        </td>
--}}

                        <td class="center"><a href="{{route('page.edit', $page->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($page,['route'=>['page.destroy',$page->id],'method'=>'DELETE']) !!}
                        <td class="center">
                            <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>
                        </td>

                        {!! Form::close() !!}
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('css')


@endsection

@section('js')


@endsection