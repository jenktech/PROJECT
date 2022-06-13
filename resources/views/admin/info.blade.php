@if(session('success'))
   <div class="alert alert-success text-center" role="alert">
       {{session('success')}}

   </div>
@endif
@if(session('fail'))

    <div class="alert alert-danger text-center" role="alert">
        {{session('fail')}}
 
</div>
@endif
@yield('content')