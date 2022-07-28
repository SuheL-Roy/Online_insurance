namespace App\Models\User;
namespace App\Models\Employee;
namespace App\Models\Category;
namespace App\Models\Installment;
@extends('master')

@section('content')
<!-- <h2>Total User</h2><br />
<h1>{{App\Models\User::count()}}</h1>
<h2>Total Manager</h2><br />
<h1>{{App\Models\User::where('role','manager')->count()}}</h1>
<h2>Total Accountant</h2><br />
<h1>{{App\Models\User::where('role','accountant')->count()}}</h1>
<h2>Total Account Holder</h2><br />
<h1>{{App\Models\User::where('role','account_holder')->count()}}</h1> -->
<!-- <h1>{{App\Models\Installment::where('status','paid')->count()}}</h1>
<h1>{{App\Models\Installment::where('status','due')->count()}}</h1> -->
@if(auth()->user()->role==='manager' || auth()->user()->role==='accountant')
<div class="card-columns p-3 ">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Total User</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\User::count()}}</h6>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Total Manager</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\User::where('role','manager')->count()}}</h6>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Total Accountant</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\User::where('role','accountant')->count()}}</h6>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Total Account Holder</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\User::where('role','account_holder')->count()}}</h6>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Category</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\Category::count()}}</h6>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Current Month Paid Installment</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\Installment::where('status','paid')->count()}}</h6>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Current Month Due Installment</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\Installment::where('status','due')->count()}}</h6>
        </div>
    </div>
</div>
@else

<div class="card-columns p-3 ">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Current Month Paid MyInstallment</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\Installment::where('user_id', auth()->user()->id)->where('status', 'paid')->count()}}</h6>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Current Month Due MyInstallment</h5>
            <h6 class="card-subtitle mb-2 text-center">{{App\Models\Installment::where('user_id', auth()->user()->id)->where('status', 'due')->count()}}</h6>
        </div>
    </div>
</div>

@endif
@endsection