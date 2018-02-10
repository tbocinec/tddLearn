

@extends('layouts.myapp')

@section('content')
    <h1>Riešenia</h1>

    <br>  <br>  <br>  <br>  <br>

    @if(Session::has('delete_solutuon'))
        <p class="bg-danger">{{session('delete_solutuon')}} </p>
    @endif

    @if($solutions)



        <table class="table table-bordered table-striped table-hover js-basic-example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="no: activate to sort column descending" style="width: 56px;">id</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Dept. Name: activate to sort column ascending" style="width: 156px;">Nazov</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Dept. Name: activate to sort column ascending" style="width: 156px;">Owner</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">Zadanie</th>
            </thead>
            <tbody>
            @foreach($solutions as $solution)
                <tr role="row" class="odd">
                    <td class="sorting_1">{{$solution->id}}</td>
                    <td><a href="{{route('solution.edit',$solution->id)}}"> {{$solution->title}}</a></td>
                    <td>{{$solution->user->name}}</td>
                    <td>{{$solution->task_id}}</td>
                    <td>{{$solution->created_at->diffForhumans()}}</td>
                    <td>{{$solution->updated_at->diffForhumans()}}</td>
                </tr>


            @endforeach
            </tbody>
        </table>


    @endif
@endsection
