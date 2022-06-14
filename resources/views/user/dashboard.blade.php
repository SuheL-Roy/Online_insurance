namespace App\Models\User;
namespace App\Models\Employee;
@extends('master')

@section('content')
<h2>Total User</h2><br/> 
<h1>{{App\Models\User::count()}}</h1>
<h2>Total Manager</h2><br/>
<h1>{{App\Models\User::where('role','manager')->count()}}</h1>
<h2>Total Accountant</h2><br/>
<h1>{{App\Models\User::where('role','accountant')->count()}}</h1>
<h2>Total Account Holder</h2><br/>
<h1>{{App\Models\User::where('role','account_holder')->count()}}</h1>

@endsection