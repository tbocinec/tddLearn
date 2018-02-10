

@extends('layouts.myapp')

@section('content')
    <h1> {{$task->name}}</h1>

    <br>
    Programing language : <b>{{$task->programingLanguage->name}}</b> <br>
    Category: <b>{{$task->category->name}}</b>
    <h3>
        Descript
    </h3>
    <p>
        {{$task->description}}
    </p>
    <br>
    <h3>Level List</h3>






@endsection
