@extends('admin.layouts.header')

@section('title', 'Page Title')

@section('content')

    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">編輯商品</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            @if($errors->all())
                <div class="callout callout-danger">
                    {{ HTML::ul($errors->all()) }}
                </div>
            @endif


            @include('maker.adminForm',
                  ['type' => 'actionForm',
                   'action'=>$action,
                   'model'=>isset($model)?$model:null,
                   'modelName'=>'batteries',])

            <div class="box-body">

                @include('maker.adminForm',
                  ['type' => 'text',
                   'formName'=>'name',
                   'require'=>'true',
                   'labelName'=>'商品名稱',])

                @include('maker.adminForm',
                 ['type' => 'text',
                  'formName'=>'code',
                  'require'=>'true',
                  'labelName'=>'商品別碼',])

                <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">商品圖</label>
                    <div class="col-sm-10">
                        @if(isset($model))
                            <img src="{{'/img/uploads/batteries/'.$model->image}}" alt="">
                            {{Form::file('image',null,array('class'=>'form-control'))}}
                        @else
                            {{Form::file('image',null,array('class'=>'form-control'))}}
                        @endif
                    </div>
                </div>

                @include('maker.adminForm',
                ['type' => 'textarea',
                 'formName'=>'content',
                 'labelName'=>'商品內容',])

                @include('maker.adminForm',
                ['type' => 'textarea',
                 'formName'=>'note',
                 'labelName'=>'商品註記',])

            </div>

            @include('maker.adminForm',
               ['type' => 'actionButton',
                'action'=>$action,])

        <!-- /.box-footer -->
            {{ Form::close() }}

        </div>

    </div>

@endsection
