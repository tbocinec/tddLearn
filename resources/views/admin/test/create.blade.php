

@extends('layouts.myapp')

@section('content')
    <h1>Create TEST for {{$task->name}}</h1>

    <a href="/admin/task/{{$task->id}}" >Go back to task</a> <br>
    <a href="/admin/task/{{$task->id}}/task-level/{{$taskLevel->id}}" >Go back to task level</a> <br>
    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')


    {!! Form::open(['method'=>'POST', 'action' => 'TaskTestController@store','files'=>true]) !!}

    {!! Form::hidden('level_id',$taskLevel->id) !!}
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
                        {!! Form::text('type',null,['class'=>"form-control",'placeholder' => 'Typ']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::textarea('code',null,['class'=>"form-control",'placeholder' => 'code']) !!}
                    </div>
                </div>
            </div>
        </div>




        <div class="col-12">
            {!! Form::submit('Create new test',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
        </div>




    </div>


@endsection
