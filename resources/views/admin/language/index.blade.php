

@extends('layouts.myapp')

@section('content')
<h1>List of Language</h1>

<br>  <br>  <br>  <br>  <br>

@if(Session::has('deleted_language'))
    <p class="bg-danger">{{session('deleted_language')}} </p>
@endif

<a href="/admin/language/create">Add new programing language</a>

@if(@$language)

    <table class="table table-bordered table-striped table-hover js-basic-example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="no: activate to sort column descending" style="width: 56px;">id</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Dept. Name: activate to sort column ascending" style="width: 156px;">Name</th>
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="no: activate to sort column descending" style="width: 56px;">User</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Dept. Name: activate to sort column ascending" style="width: 156px;">Password</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> url</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Actvie</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Status code</th>

        </thead>
        <tbody>
        @foreach($language as $lang)
            <tr role="row" class="odd">
                <td class="sorting_1">{{$lang->id}}</td>
                <td><a href="{{route('language.edit',$lang->id)}}"> {{$lang    ->name}}</a></td>
                <td>{{$lang->user}}</td>
                <td>{{$lang->password}}</td>
                <td>{{$lang->compiler_url}}</td>
                <td>{{$lang->active}}</td>
                <td>{{$lang->status}}</td>
            </tr>


        @endforeach
        </tbody>
    </table>


@endif
@endsection
