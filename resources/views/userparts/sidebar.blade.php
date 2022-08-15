<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          @if(auth()->user()->role==='manager')


          <li class="nav-item">
            <a class="nav-link" href="{{route('employeeroute')}}">
              <span data-feather="file"></span>
              Add Employee
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('categoryroute')}}">
              <span data-feather="file"></span>
              Policy Types
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('insurancepolicyroute')}}">
              <span data-feather="shopping-cart"></span>
              Insurance Policies
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="{{route('claimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('approvedclaimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              Approved Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('doneclaimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              completed Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('rejectclaimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              Rejected Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('deathclaimlist')}}">
              <span data-feather="shopping-cart"></span>
              Death Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('approveddeathclaimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              Approved Death Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('donedeathclaimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              completed Death Claims
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('rejectdeathclaimlistroute')}}">
              <span data-feather="shopping-cart"></span>
              Rejected Death Claims
            </a>
          </li>





          <li class="nav-item">
            <a class="nav-link" href="{{route('installment.thisMonth')}}">
              <span data-feather="layers"></span>
              Due Installments of Current Month
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('alldues')}}">
              <span data-feather="layers"></span>
              All due installments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('allpaid')}}"> 
              <span data-feather="layers"></span> 
              All paid installments
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('paidinstallment.thisMonth')}}">
              <span data-feather="layers"></span>
              Paid Installments of Current Month
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('accountholderroute')}}">
              <span data-feather="layers"></span>
              Account Holders
            </a>
          </li>
        </ul>

        @endif


        @if(auth()->user()->role==='desk_officer')

        <li class="nav-item">
          <a class="nav-link" href="{{route('categoryroute')}}">
            <span data-feather="file"></span>
            Policy Types
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('insurancepolicyroute')}}">
            <span data-feather="shopping-cart"></span>
            Insurance Policies
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('claimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('approvedclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Approved Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('doneclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            completed Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('rejectclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Rejected Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('deathclaimlist')}}">
            <span data-feather="shopping-cart"></span>
            Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('approveddeathclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Approved Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('donedeathclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            completed Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('rejectdeathclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Rejected Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('installment.thisMonth')}}">
            <span data-feather="layers"></span>
            Due Installments of Current Month
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('alldues')}}">
            <span data-feather="layers"></span>
            All due installments
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('paidinstallment.thisMonth')}}">
            <span data-feather="layers"></span>
            Paid Installments of Current Month
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('accountholderroute')}}">
            <span data-feather="layers"></span>
            Account Holders
          </a>
        </li>
        </ul>

        @endif


        @if(auth()->user()->role==='accountant')

        <li class="nav-item">
          <a class="nav-link" href="{{route('installment.thisMonth')}}">
            <span data-feather="layers"></span>
            Due Installments of Current Month
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('paidinstallment.thisMonth')}}">
            <span data-feather="layers"></span>
            Paid Installments of Current Month
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('alldues')}}">
            <span data-feather="layers"></span>
            All due installments
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('claimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('approvedclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Approved Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('doneclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            completed Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('rejectclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Rejected Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('deathclaimlist')}}">
            <span data-feather="shopping-cart"></span>
            Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('approveddeathclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Approved Death Claims
          </a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="{{route('donedeathclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            completed Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('rejectdeathclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            Rejected Death Claims
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('accountholderroute')}}">
            <span data-feather="layers"></span>
            Account Holders
          </a>
        </li>
        </ul>








        @endif



        @if(auth()->user()->role==='account_holder')




        @php $user_id = auth()->user()->id;

        $policy=App\Models\Policy::with('category')->where('user_id',$user_id)->first();
        @endphp

        @if($policy->category->name == 'Life Insurance')
        <li class="nav-item">
          <a class="nav-link" href="{{route('deathclaimroute')}}">
            <span data-feather="file"></span>
            Death Claim
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('mydeathclaimlist')}}">
            <span data-feather="shopping-cart"></span>
            My Claim List
          </a>
        </li>


        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('claimroute')}}">
            <span data-feather="file"></span>
            Claim
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('myclaimlistroute')}}">
            <span data-feather="shopping-cart"></span>
            My Claim
          </a>
        </li>
        @endif



        <li class="nav-item">
          <a class="nav-link" href="{{route('myinstallment')}}">
            <span data-feather="file"></span>
            My Paid Installments
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('mydues')}}">
            <span data-feather="file"></span>
            My Due Installments
          </a>
        </li>

        @endif

        <li class="nav-item">
          <a class="nav-link" href="{{route('password',['id'=>auth()->user()->id])}}">
            <span data-feather="file"></span>
            Change your password
          </a>
        </li>




        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


        </main>
      </div>
  </div>