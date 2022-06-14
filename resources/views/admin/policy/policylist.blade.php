@extends('master')

@section('content')



    <a href="{{route('openpolicyroute')}}" class="btn btn-success">Create New Policy</a>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
       <th scope="col">Policy Holder Name</th>
       <th scope="col">Photo</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Occupation</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">National ID No:</th>
        <th scope="col">Nationality</th>
        <th scope="col">Religion</th>
        <th scope="col">Maritial Status</th>
        <th scope="col">Parmanent Address</th>
        <th scope="col">Present Address</th>
        <th scope="col">Annual Income</th>
        <th scope="col">Mobile</th>
        <th scope="col">Email</th>

        <!-- Benificent part -->
        <th scope="col">Benificient Name</th>
        <th scope="col">Benificient NID</th>
        <th scope="col">Relation</th>
        <th scope="col">Benificient Address</th>

        <!-- Account Part -->
        <th scope="col">Policy Number</th>
       <th scope="col">Policy Name</th>
       <th scope="col">Polciy Length (Year)</th>
        <th scope="col">Installment Amount (BDT)</th>
         
         <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_policies as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->policy_holder_name}}</td>
            <td>
                <img style="width: 200px;" src="{{url('/uploads/Images/'.$single_data->holder_image)}}" alt="Account Holder">
            </td>
            <td>{{$single_data->father_name}}</td>
            <td>{{$single_data->mother_name}}</td>
            <td>{{$single_data->occupation}}</td>
            <td>{{$single_data->date_of_birth}}</td>
            <td>{{$single_data->gender}}</td>
            <td>{{$single_data->nid_number}}</td>
            <td>{{$single_data->nationality}}</td>
            <td>{{$single_data->religion}}</td>
            <td>{{$single_data->maritial_status}}</td>
            <td>{{$single_data->permanent_address}}</td>
            <td>{{$single_data->present_address}}</td>
            <td>{{$single_data->annual_income}}</td>
            <td>{{$single_data->mobile}}</td>
            <td>{{$single_data->email}}</td>


            <td>{{$single_data->benificant_name}}</td>
            <td>{{$single_data->banificient_nid}}</td>
            <td>{{$single_data->relation}}</td>
            <td>{{$single_data->benifient_address}}</td>


            <td>{{$single_data->policy_number}}</td>

            <td>{{$single_data->category->name}}</td>
            <td>{{$single_data->category->policy_length}}</td>
            <td>{{$single_data->category->installment_amount}}</td>
            
            
    
        
            <td>
                <a href="{{route('editformroute', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="{{route('policydelete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
