

@extends('layouts.myapp')

@section('content')
    <h1>Edit language</h1>

    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')


    {!! Form::model($language,['method'=>'PATCH', 'action' => ['LanguageController@update',$language->id],'files'=>true]) !!}
    {{ csrf_field() }}
    <div class="row clearfix">
        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::text('name',null,['class'=>"form-control",'placeholder' => 'Name']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::text('compiler_url',null,['class'=>"form-control",'placeholder' => 'Compiller url']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::text('user',null,['class'=>"form-control ",'placeholder' => 'User']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::text('password',null,['class'=>"form-control ",'placeholder' => 'Password']) !!}
                    </div>
                </div>
            </div>
        </div>




        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::select('active',array(1=>"Active",0=>"Not Active"),null,['class'=>"form-control show-tick",'placeholder' => 'Status']) !!}
                    </div>
                </div>
            </div>
        </div>




        <div class="col-12">
            {!! Form::submit('Edit Language',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
        </div>
        </div>
        {!! Form::close() !!}
        <div class="row clearfix">
        {!! Form::open(['method'=>'DELETE', 'action' => ['LanguageController@destroy',$language->id]]) !!}
        {{ csrf_field() }}
        <div class="col-12">
            {!! Form::submit('Delete language',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
        </div>
        </div>
        {!! Form::close() !!}















    <br>  <br>  <br>  <br>  <br>

@endsection
