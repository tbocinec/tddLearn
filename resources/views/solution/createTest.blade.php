

@extends('layouts.myapp')

@section('content')
    <h1>Create SOLUTION</h1>

    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')

    {!! Form::open(['method'=>'POST', 'action' => 'UserTestController@store']) !!}
    {{ csrf_field() }}

        <div class="row clearfix">
            {!! Form::hidden('level_id',$level_id) !!}
            {!! Form::hidden('solution_id',$solution_id) !!}
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                        <div class="form-line">
                            {!! Form::text('name',null,['class'=>"form-control show-tick",'placeholder' => 'Name']) !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                   {!! Form::submit('Create test',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
            </div>




        </div>


@endsection
