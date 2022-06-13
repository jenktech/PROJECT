<ul id="sidebarnav" class="pt-4">
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
           href="{{route('admin.index')}}" aria-expanded="false"><i class="mdi mdi-all-inclusive"></i><span
           class="hide-menu">Back home</span>
       </a>
   </li>          @if(Auth::user()->hworker)
                 <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="{{route('hworker.create')}}" aria-expanded="false"><i class="ti-user me-1 ms-1"></i>
                      Complete registration</a>
                        </a>
                  </li>
                   @endif

    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
             href="{{route('post.index')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                    class="hide-menu">Hospital information&report</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                               href="{{route('user.index')}}" aria-expanded="false"><i class="mdi mdi-border-outside"></i><span
                                class="hide-menu">Systeam user management</span></a>
                    </li>
          


                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('location.index')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                               class="hide-menu"> Systeam usage and management</span></a>
                            </li>
                            

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                     href="{{route('roles.index')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                    class="hide-menu">Role management</span></a>
                                </li>

                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{route('admin.create')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                     class="hide-menu">Register Payment Means</span></a>
                                    
                                    </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                            href="{{route('location.create')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                             class="hide-menu">Register Insurance Company</span></a>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                 href="{{route('blood.index')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                                class="hide-menu">Hospital request</span></a>
                                        </li>
                                               
                                    <li class="sidebar-item">
                         
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                         href="{{route('post.create')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i>
                                             Posts and News</a>
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
          
                    </span></a></li>
        </ul>
    </li>
   
</ul>