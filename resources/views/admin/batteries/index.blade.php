@extends('admin.layouts.header')

@section('content')
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <a href="/admin/batteries/create" class="btn btn-primary">新增</a>

                <h3 class="box-title">商品介紹</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{
                Form::open(array('class'=>'form-horizontal form-bordered','method' => 'get','url' => '/admin/batteries'))
                }}
                <table class="table table-striped">
                    <thead>
                    <tr>
                        @include('maker.adminIndex',
                                ['type' => 'searchTitle',
                                 'title'=>'電池',])
                        <th>編輯/刪除</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($batteries as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->code}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>{{$row->updated_at}}</td>

                            @include('maker.adminIndex',
                                    ['type' => 'features',
                                     'action'=> $action,
                                     'id'=>$row->id,])

                        </tr>
                    @endforeach

                </table>

                {{ Form::close() }}
            </div>

            @include('pagination.search',
                    [
                     'paginator' => $batteries,
                     'searchStr'=>$searchesStr,
                    ]
                    )
        </div>
    </div>
@endsection
<script>

</script>