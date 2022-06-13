<ul id="sidebarnav" class="pt-4">
    <li class="sidebar-item">
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link"
               href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-all-inclusive"></i><span
               class="hide-menu">Back home</span>
           </a>
        {{-- <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="{{route('donor.create')}}" aria-expanded="false"><i class="ti-user me-1 ms-1"></i>
            Request to donate</a>
        </a>
    {{-- </li>
    <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="{{route('donor.index')}}" aria-expanded="false"><i class="ti-wallet me-1 ms-1"></i>
                Personal details</a>
            </a>
        </li> --}}
  
    
        <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('reception.index')}}" aria-expanded="false"><i class="ti-wallet me-1 ms-1"></i>Doctor request</a>
                </a>
            </li>
      
         --}}
    



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