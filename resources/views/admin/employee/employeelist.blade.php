@extends('master')

@section('content')



    <a href="{{route('employeeformroute')}}" class="btn btn-success">Add Employee</a>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Employee Id</th>
       <th scope="col">Employee Name</th>
       <th scope="col">Designation</th>
        <th scope="col">Email</th>
        
    </tr>
    </thead>
    <tbody>

    @foreach($all_users as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->id}}</td>
            
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->role}}</td>
            <td>{{$single_data->email}}</td>
            
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
