@extends('master')


@section('content')

    <h3>My Paid Installments</h3>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Account Number</th>
            
            <th scope="col">Month</th>
            <th scope="col">Year</th>
            <th scope="col">Installment Amount</th>
           
        </tr>
        </thead>
        <tbody>

        @foreach($all_installments as $key=>$single_data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$single_data->policy_id}}</td>

                
                <td>{{$single_data->month}}</td>
                <td>{{$single_data->year}}</td>
                <td>{{$single_data->amount}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="text-align: right">Total: {{$total_installments}}</div>
    {{$all_installments->links()}}


   
@endsection
