
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">

            @if(auth()->user()->role_id == 1)
                @include('layouts.sidebars.admin')

            @elseif(auth()->user()->role_id == 2)
                @include('layouts.sidebars.hospital')

            @elseif(auth()->user()->role_id == 3)
                @include('layouts.sidebars.donors')

                @elseif(auth()->user()->role_id == 4)
                @include('layouts.sidebars.cashier')
                @elseif(auth()->user()->role_id == 5)
                @include('layouts.sidebars.maabara')
                @elseif(auth()->user()->role_id == 6)
                @include('layouts.sidebars.pharmacy')




            @else

            @endif 
    
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
