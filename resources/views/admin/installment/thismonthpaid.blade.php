@extends('master')


@section('content')

    <h3>Paid Installments of Current Month</h3>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Account Number</th>
            <th scope="col">Installment Amount</th>
            <th scope="col">Month</th>
            <th scope="col">Year</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach($all_data ?? '' as $key=>$single_data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$single_data->user->name}}</td>
                <td>{{$single_data->policy_id}}</td>
                <td>{{$single_data->amount}}</td>
                <td>{{$single_data->month}}</td>
                <td>{{$single_data->year}}</td>
                <td>{{$single_data->status}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$all_data ?? ''->links()}}


   
@endsection
