

@extends('layouts.myapp')

@section('content')
    <h1> {{$task->name}}</h1>

    <p> {{$task->description}} </p>

    This task contains the following task levels: <br>

    <ul>
        @foreach($levels as $level)

         <li>
             <a href="/solution/{{$solution->id}}/level/{{$level->id}}"> {{$level->name}}</a>
         </li>

        @endforeach
    </ul>

@endsection
