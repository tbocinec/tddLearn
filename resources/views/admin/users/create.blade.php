

@extends('layouts.myapp')

@section('content')
    <h1>Create user</h1>

    <br>  <br>  <br>  <br>  <br>

    @include('layouts.component.validate')

    {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store','files'=>true]) !!}
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
                            {!! Form::password('password',['class'=>"form-control ",'placeholder' => 'Heslo']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                        <div class="form-line">
                            {!! Form::file('photo_id',null,['class'=>"form-control ",'placeholder' => 'Fotka']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                        <div class="form-line">
                            {!! Form::email('email',null,['class'=>"form-control",'placeholder' => 'Email']) !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                        <div class="form-line">
                            {!! Form::select('is_active',array(1=>"Active",0=>"Not Active"),0,['class'=>"form-control show-tick",'placeholder' => 'Status']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                        <div class="form-line">
                            {!! Form::select('role_id',$roles,null,['class'=>"form-control show-tick",'placeholder' => 'Rola']) !!}
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-12">
                   {!! Form::submit('Create User',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
            </div>



        </div>













    <br>  <br>  <br>  <br>  <br>

@endsection
