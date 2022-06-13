<ul id="sidebarnav" class="pt-4">
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
           href="{{route('hospital.index')}}" aria-expanded="false"><i class="mdi mdi-all-inclusive"></i><span
           class="hide-menu">Back home</span>
       </a>
   </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="{{route('hworker.create')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i>
            Complete registration</a>
        </a>
    </li>

    <li class="sidebar-item"> 
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="{{route('hospital.create')}}" aria-expanded="false"><i class="ti-wallet me-1 ms-1"></i>
            Donor request</a>
        </a>
    </li>

    <li class="sidebar-item"> 
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="{{route('reblood.create')}}" aria-expanded="false"><i  class="mdi mdi-message-outline"></i><span
            class="hide-menu">Request blood</span>
        </a>
    </li>

    <li class="sidebar-item"> 
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="{{route('blood.index')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
            class="hide-menu">Blood requests</span>
        </a>
    </li>

   
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
           href="{{route('reblood.index')}}" aria-expanded="false"><i class="mdi mdi-bulletin-board"></i><span
           class="hide-menu">Hospital General report</span>

       </a>
   </li>
   


    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fa fa-power-off me-1 ms-1"></i>
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        
    </li>

</ul>