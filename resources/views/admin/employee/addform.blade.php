@extends('master')

@section('content')

    <h3>Add Employee</h3>

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

    <form action="{{route('addroute2')}}" method="post" role="form"enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="h_name">Name</label>
            <input type="text" name="name"  id="h_name" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="designation">Select Designation:</label>
            <select name="role" id="designation" class="form-control" required>

                @foreach($employees as $employee)
                    <option value="{{$employee->type}}">{{$employee->type}}</option>
                @endforeach
            </select>
        </div>

<div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email"  class="form-control"
                   required>
        






        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
