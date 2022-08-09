@extends('master')


@section('content')

<body style="background-color: white;">

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$errors}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <center>
    Account Number: {{$installments->policy_id}}<br>
    Installment Amount: {{$installments->amount}}<br>
    month: {{$installments->month}}<br>
    @if(auth()->user()->role==='account_holder')
    <form action="{{route('confirmroute',['id'=>$installments->id])}}" method="POST" role="form" enctype="multipart/form-data">
      @method('post')
      @csrf
      <input type="submit" name="update" value="Confirm" class="btn btn-primary">
    </form>
    @else
    <form action="{{route('confirmed_route',['id'=>$installments->id])}}" method="POST" role="form" enctype="multipart/form-data">
      @method('post')
      @csrf
      <input type="submit" name="update" value="Confirm" class="btn btn-primary">
    </form>

    @endif
  </center>

  </div>

  </div>
  </div>
  </div>
  @endsection