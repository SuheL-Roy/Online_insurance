@extends('master')


@section('content')

<center>
    <h3>Account Holders</h3>
    </center>

        Account Holders
    </button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">Number</th>
            <th scope="col">Email</th>
            
        </tr>
        </thead>
        <tbody>

        @foreach($all_data as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->user_id}}</td>
            <td>{{$single_data->policy_holder_name}}</td>
            <td>{{$single_data->mobile}}</td>
            <td>{{$single_data->email}}</td>
            
        </tr>
@endforeach
        </tbody>
    </table>
{{$all_data->links()}}


   
    @endsection
