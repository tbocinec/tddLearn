

@extends('layouts.myapp')

@section('content')
    <h1>EDIT LEVEL {{$taskLevel->name}}</h1>

    <a href="/admin/task/{{$idTask[0]}}" >Go back to task</a> <br>
    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')

    {!! Form::model($taskLevel,['method'=>'PATCH', 'action' => ['AdminLevel@update',$taskLevel->id],'files'=>true]) !!}

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
            {!! Form::submit('Edit level parameters',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
        </div>

    <br>
    <div class="col-12">
        <h3>List of test</h3>
        <ol>
            @foreach($taskLevel->test as $test)

                <li> <a href="/admin/task/{{$idTask[0]}}/task-level/{{$taskLevel->id}}/test/{{$test->id}}"> {{$test->name}}</a>

                </li>

            @endforeach
        </ol>
        <a href="/admin/task/{{$idTask[0]}}/task-level/{{$taskLevel->id}}/test/create"> Create new  test</a>



    </div>


    </div>


@endsection
