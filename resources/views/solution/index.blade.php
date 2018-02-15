

@extends('layouts.myapp')

@section('content')
<h1>SOLUTIONS</h1>

<br>  <br>

<a href="/solution/create">Create new solutions</a>

<h3>List of solutions</h3>
   <ul>
   @foreach($solutions as $solution_item)
         <li><a href="/solution/{{$solution_item->id}}">({{$solution_item->created_at}}) {{$solution_item->task->name }}}</a></li>
   @endforeach
   </ul>

@endsection
