@extends('admin.layouts.header')

@section('title', 'Page Title')

@section('content')

    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">管理人員</h3>
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
                   'modelName'=>'users',])

            <div class="box-body">

                @include('maker.adminForm',
                ['type' => 'text',
                 'formName'=>'email',
                 'require'=>'true',
                 'labelName'=>'Email',])

                @unless(isset($model))
                    @include('maker.adminForm',
                     ['type' => 'password',
                      'formName'=>'password',
                      'require'=>'true',
                      'labelName'=>'密碼',])
                @endunless

                @include('maker.adminForm',
                ['type' => 'text',
                 'formName'=>'name',
                 'require'=>'true',
                 'labelName'=>'名稱',])

                {{--<div class="form-group">--}}
                {{--<label for="image" class="col-sm-2 control-label">大頭貼</label>--}}
                {{--<div class="col-sm-10">--}}
                {{--@if(isset($model))--}}
                {{--<img src="{{'/img/uploads/users/'.$model->image}}" alt="">--}}
                {{--{{Form::file('image',null,array('class'=>'form-control'))}}--}}
                {{--@else--}}
                {{--{{Form::file('image',null,array('class'=>'form-control'))}}--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--</div>--}}


            </div>

            @include('maker.adminForm',
               ['type' => 'actionButton',
                'action'=>$action,])

        <!-- /.box-footer -->
            {{ Form::close() }}

        </div>

    </div>

@endsection
