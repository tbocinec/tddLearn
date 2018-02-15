

@extends('layouts.myapp')

@section('content')
    <h1>Create LEVEL for {{$task->name}}</h1>
    <a href="/admin/task/{{$task->id}}" >Go back to task</a> <br>
    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')


    {!! Form::open(['method'=>'POST', 'action' => 'AdminLevel@store','files'=>true]) !!}

    {!! Form::hidden('task_id',$task->id) !!}
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
                        {!! Form::text('description',null,['class'=>"form-control",'placeholder' => 'Description']) !!}
                    </div>
                </div>
            </div>
        </div>




        <div class="col-12">
            {!! Form::submit('Create new level',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
        </div>




    </div>


@endsection
