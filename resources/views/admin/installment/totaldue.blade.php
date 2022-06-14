@extends('master')


@section('content')

    <h3>Due Installments </h3>


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

            @if(auth()->user()->role==='accountant')
            <th scope="col">Action</th>
            @endif
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

                @if(auth()->user()->role==='accountant')

                <td>
           


                    <a href="{{route('installmentpayroute', ['id'=>$single_data->id])}}" class="btn btn-success">Pay</a>
                  

                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$all_data ?? ''->links()}}


   
@endsection
