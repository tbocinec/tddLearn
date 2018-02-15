

@extends('layouts.myapp')

@section('content')
<h1>TASK</h1>

<br>  <br>  <br>  <br>  <br>

@if(Session::has('deleted_task'))
    <p class="bg-danger">{{session('deleted_task')}} </p>
@endif

<a href="/admin/task/create">Create new task</a>
@if(@tasks)



    <table class="table table-bordered table-striped table-hover js-basic-example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="no: activate to sort column descending" style="width: 56px;">id</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Dept. Name: activate to sort column ascending" style="width: 156px;">Name</th>

            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">Category</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Programing Language</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Description </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Active </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">Created at</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">updated at</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">EDIT</th>

        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr role="row" class="odd">
                 {{--{{dd($task)}}--}}
                <td class="sorting_1">{{$task->id}}</td>
                <td><a href="{{route('task.show',$task->id)}}"> {{$task->name}}</a></td>

                <td>{{$task->category->name}}</td>
                <td>{{$task->programingLanguage->name}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->active}}</td>

                <td>{{$task->created_at}}</td>
                <td>{{$task->updated_at}}</td>
                <td><a href="{{route('task.edit',$task->id)}}"> EDIT</a></td>

            </tr>


        @endforeach
        </tbody>
    </table>


@endif
@endsection
