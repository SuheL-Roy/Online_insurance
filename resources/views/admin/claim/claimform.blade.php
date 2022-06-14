@extends('master')

@section('content')

    <h3>Claim for your policy</h3>

    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('claimroute2')}}" method="post" role="form"enctype="multipart/form-data">
        @csrf

        
        

            <input type="hidden" name="policy_id" value="{{$policy->id}}">

<div class="form-group">
            <label for="reason">Reason</label>
            <input type="text" name="reason" id="reason" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" name="time" id="time" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="place">Place</label>
            <input type="text" name="place" id="place" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="amount">Amount of amount (BDT):</label>
            <input type="decimal" name="loss_amount" id="amount" class="form-control"
                   required>
        </div>



         <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" id="description"  required> 
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection












































