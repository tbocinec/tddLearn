

@extends('layouts.myapp')

@section('content')
    <h1>EDIT TASK</h1>

    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')

    {!! Form::model($task,['method'=>'PATCH', 'action' => ['AdminTaskController@update',$task->id],'files'=>true]) !!}

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





        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::select('active',array(1=>"Active",0=>"Not Active"),0,['class'=>"form-control show-tick",'placeholder' => 'Status']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::select('programingLanguage_id',$programingLanguage,null,['class'=>"form-control show-tick",'placeholder' => 'Programovací jazyk']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                    <div class="form-line">
                        {!! Form::select('categoryTask_id',$categoryTask,null,['class'=>"form-control show-tick",'placeholder' => 'Kategoria']) !!}
                    </div>
                </div>
            </div>
        </div>




        <div class="col-12">
            {!! Form::submit('Edit Task',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
        </div>




    </div>


@endsection
