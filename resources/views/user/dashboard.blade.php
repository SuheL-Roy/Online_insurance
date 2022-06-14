namespace App\Models\User;
namespace App\Models\Employee;
@extends('master')

@section('content')
<h2>Total User</h2><br />
<h1>{{App\Models\User::count()}}</h1>
<h2>Total Manager</h2><br />
<h1>{{App\Models\User::where('role','manager')->count()}}</h1>
<h2>Total Accountant</h2><br />
<h1>{{App\Models\User::where('role','accountant')->count()}}</h1>
<h2>Total Account Holder</h2><br />
<h1>{{App\Models\User::where('role','account_holder')->count()}}</h1>
<div class="card">
    <div class="card-header row">
        <div class="col col-sm-3">
            
            <div class="card-options d-inline-block">
            
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="list-item-wrap">
            <div class="list-item">
                <div class="item-inner">
                    <label class="custom-control custom-checkbox">
                       
                       
                    </label>
                    <div class="list-title"><a href="javascript:void(0)">Total User</a></div>
                    <div class="list-actions">
                        <a href="#"><i class="ik ik-eye"></i></a>
                        <a href="#"><i class="ik ik-inbox"></i></a>
                        <a href="#"><i class="ik ik-edit-2"></i></a>
                        <a href="#"><i class="ik ik-trash-2"></i></a>
                    </div>
                </div>

                <div class="qickview-wrap">
                    <div class="desc">
                        <p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="item-inner">
                    <label class="custom-control custom-checkbox">
                       
                        
                    </label>
                    <div class="list-title"><a href="javascript:void(0)">Aenean eu pharetra arcu, vitae elementum sem. Sed non ligula molestie, finibus lacus at, suscipit mi. Nunc luctus lacus vel felis blandit, eu finibus augue tincidunt.</a></div>
                    <div class="list-actions">
                        <a href="#"><i class="ik ik-eye"></i></a>
                        <a href="#"><i class="ik ik-inbox"></i></a>
                        <a href="#"><i class="ik ik-edit-2"></i></a>
                        <a href="#"><i class="ik ik-trash-2"></i></a>
                    </div>
                </div>
                <div class="qickview-wrap">
                    <div class="desc">
                        <p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
                    </div>
                </div>
            </div>
            <div class="list-item">
                <div class="item-inner">
                    <label class="custom-control custom-checkbox">
                        
                       
                    </label>
                    <div class="list-title"><a href="javascript:void(0)">Donec lectus augue, suscipit in sodales sit amet, semper sit amet enim. Duis pretium, nisi id pretium ornare, tortor nibh sodales tellus.</a></div>
                    <div class="list-actions">
                        <a href="#"><i class="ik ik-eye"></i></a>
                        <a href="#"><i class="ik ik-inbox"></i></a>
                        <a href="#"><i class="ik ik-edit-2"></i></a>
                        <a href="#"><i class="ik ik-trash-2"></i></a>
                    </div>
                </div>
                <div class="qickview-wrap">
                    <div class="desc">
                        <p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection