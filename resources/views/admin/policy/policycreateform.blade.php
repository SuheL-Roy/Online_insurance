@extends('master')

@section('content')

    <h3>Open New Policy</h3>

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

    <form action="{{route('createroute')}}" method="post" role="form"enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="h_name">Policy Holder Name</label>
            <input type="text" name="policy_holder_name" placeholder="Enter Policy Holder Name" id="h_name" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="f_name">Father Name</label>
            <input type="text" name="father_name" placeholder="Enter Father Name" id="f_name" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="m_name">Mother Name</label>
            <input type="text" name="mother_name" placeholder="Enter Mother Name" id="m_name" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" placeholder="Enter Occupation" id="occupation" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="date_of_birth" placeholder="Enter Date of Birth" id="dob" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" placeholder="Enter Gender" id="gender" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="nid">National ID No:</label>
            <input type="number" name="nid_number" placeholder="Enter National ID No" id="nid" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" placeholder="Enter Nationality" id="nationality" class="form-control"
                   required>
        </div>


<div class="form-group">
            <label for="religion">Religion</label>
            <input type="text" name="religion" placeholder="Enter Religion" id="religion" class="form-control"
                   required>
        </div>



<div class="form-group">
            <label for="maritial_status">Maritial Status</label>
            <input type="text" name="maritial_status" placeholder="Enter Maritial Status" id="maritial_status" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="permanent_address">Parmanent Address</label>
            <input type="string" name="permanent_address" placeholder="Enter Parmanent Address" id="permanent_address" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="present_address">Present Address</label>
            <input type="string" name="present_address" placeholder="Enter Present Address" id="present_address" class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label for="annual_income">Annual Income (BDT)</label>
            <input type="string" name="annual_income" placeholder="Enter Present Address" id="annual_income" class="form-control"
                   required>
        </div>

<div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="string" name="mobile" placeholder="Enter Mobile Number" id="mobile" class="form-control"
                   required>

        </div><div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email" id="email" class="form-control"
                   required>
        </div>

        

        <div class="form-group">
          <label>Account Holder Photo</label>
            <input name="holder_image" type="file" class="form-control">
        </div>

 <br> <br> <h3> Benificient Information </h3><br>

        <div class="form-group">
            <label for="benificant_name">Benificient Name</label>
            <input id="benificant_name" name="benificant_name" type="text" class="form-control" required
                   placeholder="Enter Benificient Name">
        </div>

        <div class="form-group">
            <label for="banificient_nid">Benificient NID</label>
            <input id="banificient_nid" name="banificient_nid" type="number" class="form-control" required
                   placeholder="Enter Benificient NID">
        </div>

        <div class="form-group">
            <label for="relation">Relation</label>
            <input id="relation" name="relation" type="text" class="form-control" required
                   placeholder="Enter Relation">
        </div>

        <div class="form-group">
            <label for="benifient_address">Benificient Address</label>
            <input id="benifient_address" name="benifient_address" type="string" class="form-control" required
                   placeholder="Enter Benificient Address">
        </div>


     <br> <br> <h3>Policy Information </h3> <br>


<div class="form-group">
            <label for="category_id">Select Policy Type:</label>
            <select name="category_id" id="category_id" class="form-control">

                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
