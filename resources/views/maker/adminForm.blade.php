@php
    if(isset($require)){
        $labelName=$labelName.'*';
        $require = 'required';
    }
@endphp

@if ($type === 'text')
    <div class="form-group">
        <label for="{{$formName}}" class="col-sm-2 col-sm-2 control-label">{{$labelName}}</label>
        <div class="col-sm-10">
            {{ Form::text($formName, null, array('class' => 'form-control',isset($require)?$require:'')) }}
        </div>
    </div>
@endif

@if ($type === 'password')
    <div class="form-group">
        <label for="{{$formName}}" class="col-sm-2 col-sm-2 control-label">{{$labelName}}</label>
        <div class="col-sm-10">
            {{ Form::password($formName, null, array('class' => 'form-control',isset($require)?$require:'')) }}
        </div>
    </div>
@endif

@if ($type === 'email')
    <div class="form-group">
        <label for="{{$formName}}" class="col-sm-2 col-sm-2 control-label">{{$labelName}}</label>
        <div class="col-sm-10">
            {{ Form::email($formName, null, array('class' => 'form-control',isset($require)?$require:'')) }}
        </div>
    </div>
@endif

@if ($type === 'textarea')
    <div class="form-group">
        <label for="{{$formName}}" class="col-sm-2 control-label">{{$labelName}}</label>
        <div class="col-sm-10">
            {{ Form::textarea($formName, null,['class' => 'input-block-level' , 'rows' => '5']) }}
        </div>
    </div>
@endif

@if ($type === 'actionButton')
    <div class="box-footer">
        <a href="/.{{$action}}" class="btn btn-default">返回</a>
        <button type="submit" class="btn btn-info pull-primary">確定</button>
    </div>
@endif

@if ($type === 'actionForm')

    {{ isset($model)?
           Form::model($model,
           ['route' => [$modelName.'.update', $model->id], 'method' => 'PUT','class'=>'form-horizontal','files'=>'true']
           ) :
           Form::open(array('class'=>'form-horizontal','method '=>'POST','url' => $action,'files'=>'true'))
           }}

    {{Form::hidden('id',null,array('class'=>'form-control'))}}

@endif