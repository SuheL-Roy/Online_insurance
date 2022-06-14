@extends('master')
@section('content')
@if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
 <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Change your password</h1>
@if($errors->any())
<div class="alert alert-danger">
 <ul>
   @foreach($errors->all() as $error)
   <li>{{$errors}}</li>
   @endforeach
 </ul>
</div>
@endif

<form method="post" action="{{route('passwordchange',['id'=>auth()->user()->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
 @csrf

 <div class="form-group">
                       <label for="password">New Password</label>
                       <input type="password" name="password"  class="form-control" id="password" type="text" >
                   </div>
 
 <input type="submit" name="update" value="Change" class="btn btn-primary" >
</form>

@endsection