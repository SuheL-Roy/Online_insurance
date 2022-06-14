@extends('master')
@section('content')
 <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Category Information</h1>
@if($errors->any())
<div class="alert alert-danger">
 <ul>
   @foreach($errors->all() as $error)
   <li>{{$errors}}</li>
   @endforeach
 </ul>
</div>
@endif

<form method="post" action="{{route('categoryupdate',['id'=>$categories->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
 @csrf

 <div class="form-group">
                       <label for="name">Name</label>
                       <input name="name" required value="{{$categories->name}}" class="form-control" id="name" type="text" >
                   </div>
                   <div class="form-group">
                       <label for="installment_amount">Installment Amount</label>
                       <input name="installment_amount" required value="{{$categories->installment_amount}}" class="form-control" id="installment_amount" type="string" >
                   </div>
                   <div class="form-group">
                       <label for="policy_length">Policy Length (Year)</label>
                       <input name="policy_length" required value="{{$categories->policy_length}}" class="form-control" id="policy_length" type="number">
                   </div>
                   <div class="form-group">
                       <label for="interest_rate">Profit Rate</label>
                       <input
                    name="interest_rate" required value="{{$categories->interest_rate}}" class="form-control" id="interest_rate" type="string">
   
                   </div>
                   <div class="form-group">
                       <label for="status">Action</label>
                   
                       <input name="status" required value="{{$categories->status}}" class="form-control" id="status" type="text">
     
                   </div>
 
 <input type="submit" name="update" value="update" class="btn btn-primary" >
</form>

@endsection