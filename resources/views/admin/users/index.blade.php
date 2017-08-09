@extends('admin.layouts.header')

@section('title', 'Page Title')

@section('content')

        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/admin/users/create" class="btn btn-primary">新增</a>

                    <h3 class="box-title">管理人員</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{
                    Form::open(array('class'=>'form-horizontal form-bordered','method' => 'get','url' => '/admin/users'))
                    }}
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            @include('maker.adminIndex',
                                ['type' => 'searchTitle',
                                 'title'=>$title,])
                            <th>編輯/刪除</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($model as $row)
                            <tr>
                                <td>{{$row->email}}</td>
                                <td>{{$row->name}}</td>

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
                      'paginator' => $model,
                      'searchStr'=>$searchesStr,
                     ]
                     )
            </div>
        </div>
@endsection
<script>

</script>