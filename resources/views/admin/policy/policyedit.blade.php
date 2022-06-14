@extends('master')
@section('content')
<body style="background-color: #;">

  @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

@if($errors->any())
<div class="alert alert-danger">
 <ul>
   @foreach($errors->all() as $error)
   <li>{{$errors}}</li>
   @endforeach
 </ul>
</div>
@endif

<h1 style="background-color: #80ced6;">Update Policy Information</h1>
<!-- <form method="post" action="{{route('policyupdate',['id'=>$policies->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;"> -->


  <form action="{{route('policyupdate',['id'=>$policies->id])}}" method="POST" role="form" enctype="multipart/form-data">
   @method('put')
 @csrf

 <div class="form-group">
                       <label for="policy_holder_name">Policy Holder Name</label>
                       <input name="policy_holder_name" required value="{{$policies->policy_holder_name}}" class="form-control" id="policy_holder_name" type="text" >
                   </div>
                   <div class="form-group">
                       <label for="father_name">Father Name</label>
                       <input name="father_name" required value="{{$policies->father_name}}" class="form-control" id="father_name" type="text" >
                   </div>
                   <div class="form-group">
                       <label for="mother_name">Mother Name</label>
                       <input name="mother_name" required value="{{$policies->mother_name}}" class="form-control" id="mother_name" type="text">
                   </div>
                   <div class="form-group">
                       <label for="occupation">Occupation</label>
                       <input
                    name="occupation" required value="{{$policies->occupation}}" class="form-control" id="occupation" type="text">
   
                   </div>
                   <div class="form-group">
                       <label for="date_of_birth">Date of Birth</label>
                   
                       <input name="date_of_birth" required value="{{$policies->date_of_birth}}" class="form-control" id="date_of_birth" type="date">
     
                   </div>

                    <div class="form-group">
                       <label for="gender">Gender</label>
                   
                       <input name="gender" required value="{{$policies->gender}}" class="form-control" id="gender" type="text">
     
                   </div>

                    <div class="form-group">
                       <label for="nid_number">National ID No:</label>
                   
                       <input name="nid_number" required value="{{$policies->nid_number}}" class="form-control" id="nid_number" type="number">
     
                   </div>

                    <div class="form-group">
                       <label for="nationality">Nationality</label>
                   
                       <input name="nationality" required value="{{$policies->nationality}}" class="form-control" id="nationality" type="text">
     
                   </div>

                    <div class="form-group">
                       <label for="religion">Religion</label>
                   
                       <input name="religion" required value="{{$policies->religion}}" class="form-control" id="religion" type="text">
     
                   </div>

                    <div class="form-group">
                       <label for="maritial_status">Maritial Status</label>
                   
                       <input name="maritial_status" required value="{{$policies->maritial_status}}" class="form-control" id="maritial_status" type="text">
     
                   </div>

                    <div class="form-group">
                       <label for="permanent_address">Parmanent Address</label>
                   
                       <input name="permanent_address" required value="{{$policies->permanent_address}}" class="form-control" id="permanent_address" type="string">
     
                   </div>

                    <div class="form-group">
                       <label for="present_address">Present Address</label>
                   
                       <input name="present_address" required value="{{$policies->present_address}}" class="form-control" id="present_address" type="string">
     
                   </div>

                   <div class="form-group">
                       <label for="annual_income">Annual Income (BDT)</label>
                   
                       <input name="annual_income" required value="{{$policies->annual_income}}" class="form-control" id="annual_income" type="decimal">
     
                   </div>

                   <div class="form-group">
                       <label for="mobile">Mobile</label>
                   
                       <input name="mobile" required value="{{$policies->mobile}}" class="form-control" id="mobile" type="string">
     
                   </div>

                   <div class="form-group">
                       <label for="email">Email</label>
                   
                       <input name="email" required value="{{$policies->email}}" class="form-control" id="email" type="email">
     
                   </div>

                   <div class="form-group">
            <label for="">Upload Image:</label>
            <input type="file" name="holder_image" class="form-control">
            </div>

                   <br> <br> <h3> Benificient Information </h3><br>

                   <div class="form-group">
                       <label for="benificant_name">Benificient Name</label>
                   
                       <input name="benificant_name" required value="{{$policies->benificant_name}}" class="form-control" id="benificant_name" type="text">
     
                   </div>

                   <div class="form-group">
                       <label for="banificient_nid">Benificient NID</label>
                   
                       <input name="banificient_nid" required value="{{$policies->banificient_nid}}" class="form-control" id="banificient_nid" type="number">
     
                   </div>

                   <div class="form-group">
                       <label for="relation">Relation</label>
                   
                       <input name="relation" required value="{{$policies->relation}}" class="form-control" id="relation" type="string">
     
                   </div>

                   <div class="form-group">
                       <label for="benifient_address">Benificient Address</label>
                   
                       <input name="benifient_address" required value="{{$policies->benifient_address}}" class="form-control" id="benifient_address" type="string">
     
                   </div>


                  
 
 <input type="submit" name="update" value="update" class="btn btn-primary" >
</form>

@endsection
</body>