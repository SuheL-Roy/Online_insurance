@extends('master')


@section('content')

    <h3>{{$title}}</h3>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kodeeo">
        Create Category
    </button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Installment Amount</th>
            <th scope="col">Policy Length (Year)</th>
            <th scope="col">Profit Rate</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($all_data as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->installment_amount}}</td>
            <td>{{$single_data->policy_length}}</td>
            <td>{{$single_data->interest_rate}}</td>
            <td>{{$single_data->status}}</td>
            <td>
                <a href="{{route('categoryedit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="{{route('categorydelete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
{{$all_data->links()}}


    <!-- Modal -->
    <div class="modal fade" id="kodeeo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('categorycreateroute')}}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Categroy Name:</label>
                        <input name="category_name" required placeholder="Enter Category Name" class="form-control" id="name" type="text">
                    </div>

                    <div class="form-group">
                        <label for="installment_amount">Enter Monthly Installment (BDT)</label>
                        <input name="installment_amount" required placeholder="Enter Monthly Installment Amount" class="form-control" id="installment_amount" type="text">
                    </div>

                    <div class="form-group">
                        <label for="policy_length">Enter Policy Length</label>
                        <input name="policy_length" required placeholder="Enter Enter Policy Length" class="form-control" id="policy_length" type="number">
                    </div>

                    <div class="form-group">
                        <label for="interest_rate">Enter Profit Rate</label>
                        <input name="interest_rate" required placeholder="Enter Installment Rate" class="form-control" id="interest_rate" type="text">
                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>




                </div>

            </div>
        </div>
    </div>
    @endsection
