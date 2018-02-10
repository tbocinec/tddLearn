@extends('layouts.myapp')

@section('content')
<h1>Vytvoriť riešenie</h1>
@include('layouts.component.validate')

{!! Form::open(['method'=>'POST', 'action' => 'SolutionCodeController@store']) !!}
{{ csrf_field() }}

<div class="row clearfix">


    <div class="col-md-4">
        <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                <div class="form-line">
                    {!! Form::text('title',null,['class'=>"form-control",'placeholder' => 'Nazov']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                <div class="form-line">
                    {!! Form::textarea('code',null,['class'=>"form-control",'placeholder' => 'Kod']) !!}
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-4">
        <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                <div class="form-line">
                    {!! Form::select('user_id',$users,null,['class'=>"form-control show-tick",'placeholder' => 'Pouzivatel']) !!}
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                <div class="form-line">
                    {!! Form::select('task_id',array(""=>1),null,['class'=>"form-control show-tick",'placeholder' => 'Uloha ']) !!}
                </div>
            </div>
        </div>
    </div>







    <div class="col-12">
        {!! Form::submit('Uložiť riešenie',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
    </div>




</div>




{!! Form::close() !!}

@endsection