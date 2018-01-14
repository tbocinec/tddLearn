

@extends('layouts.myapp')

@section('content')
<h1>Users</h1>

<br>  <br>  <br>  <br>  <br>

@if(@users)



    <table class="table table-bordered table-striped table-hover js-basic-example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="no: activate to sort column descending" style="width: 56px;">id</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Dept. Name: activate to sort column ascending" style="width: 156px;">Email</th>

            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">Name</th>
            <th  tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">Photo</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Role</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;"> Actvie</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">Created at</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brief: activate to sort column ascending" style="width: 500px;">updated at</th>

        </thead>
        <tbody>
        @foreach($users as $user)
            <tr role="row" class="odd">
                <td class="sorting_1">{{$user->id}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{route('users.edit',$user->id)}}"> {{$user->name}}</a></td>
                <td>{{$user->photo? str_limit($user->photo->file,$limit = 15,$end=".."):'no user photo'}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active}}</td>
                <td>{{$user->created_ad}}</td>
                <td>{{$user->updated_ad}}</td>

            </tr>


        @endforeach
        </tbody>
    </table>


@endif
@endsection
