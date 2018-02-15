

@extends('layouts.myapp')

@section('content')
    <style>
        #editor {
            position: relative;
            width: 100%;
            height: 700PX;
            max-height: 100vh
        }


    </style>



    <div class="row">
        <div class="col-10">
            <h1> {{$task->name}}</h1>
        </div>
        <div class="col-2">
            <a class="btn btn-raised waves-effect g-bg-blush2"
               href="/solution/{{$solution->id}}/level/{{$level->id}}/build"> BUILD </a>
        </div>
    </div>
    <a href="/solution/{{$solution->id}}" >Back to solution</a>
    <h2>{{$level->name}}</h2>
    <p> {{$level->description}} </p>


    @if(isset($errorStatus))
        <div class="row">
            <div class="col-12 ">
                <div class="bg-warning text-white">
                {!! $errorStatus!!}
                </div>
            </div>

        </div>
    @endif

    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-12">
                    @foreach($codes as $codeCart)
                        <a href="/solution/{{$solution->id}}/level/{{$level->id}}/code/{{$codeCart->id}}">
                            <span class="btn btn-raised waves-effect g-bg-blush2"> Card id{{$codeCart->id}} </span>
                        </a>
                    @endforeach
                        <div class="d-inline-block">
                        {!! Form::open(['method'=>'POST', 'action' => 'UserCodeController@store']) !!}
                        {!! Form::hidden('solution_id',$solution->id)!!}
                        {{ csrf_field() }}
                         {!! Form::submit('Create new tab',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
                         {!! Form::close() !!}
                        </div>

                </div>
            </div>

            @if(isset($actualCode))
             {!! Form::model($actualCode,['method'=>'PATCH', 'action' => ['UserCodeController@update',$actualCode->id],'files'=>true]) !!}
             {{ Form::textarea('code',null,['class'=>"d-none"])}}
                <div id="editor">{{$actualCode->code}} </div>
                <div class="col-12">
                    {!! Form::submit('Edit CARD',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
                </div>
            {!! Form::close()!!}
            @elseif(isset($actualTest))
                {!! Form::model($actualTest,['method'=>'PATCH', 'action' => ['UserTestController@update',$actualTest->id],'files'=>true]) !!}
                {{ Form::textarea('code',null,['class'=>"d-none"])}}
                <div id="editor">{{$actualTest->code}} </div>
                <div class="col-12">
                    {!! Form::submit('Edit TEST',['class'=>"btn btn-raised waves-effect g-bg-blush2"]) !!}
                </div>
                {!! Form::close()!!}
            @else
                Najskôr vyberte kartu
            @endif
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-xs-12">
                    <h3>List of test</h3>
                    @foreach($tests as $test)
                        <a href="/solution/{{$solution->id}}/level/{{$level->id}}/test/{{$test->id}}">
                            <div> Test  <b>{{$test->name}}</b>
                                @if(isset($test->success))
                                    @if($test->success==1)
                                        --Uspešný test
                                    @else
                                        --Neuspešny test
                                    @endif
                                @else
                                    ---Test Nebol spusteny
                                @endif
                            </div>
                        </a>
                    @endforeach
                    <a class="btn btn-raised waves-effect g-bg-blush2"
                       href="/solution/{{$solution->id}}/level/{{$level->id}}/test/create"> Vytvoriť vlastný test </a>
                </div>

            </div>

        </div>

    </div>




@endsection

@section('javascript')
    <script src="{{ asset('js/ace/ace.js') }}"></script>
    <script>
    var editor = ace.edit("editor");
        editor.setTheme("ace/theme/eclipse");
        editor.session.setMode("ace/mode/python");

    var textarea = $('textarea[name="code"]');
    textarea.val(editor.getSession().getValue());
    editor.getSession().on("change", function () {
        textarea.val(editor.getSession().getValue());
    });
    </script>
@endsection

