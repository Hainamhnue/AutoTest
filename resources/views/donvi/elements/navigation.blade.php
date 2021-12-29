<!-- Preloader -->



    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars
"></i></a>
            <div class="top-left-part"><a class="logo" href="{{route('donvi-home')}}"><b><img src="{{asset('../plugins/images/pixeladmin-logo.png')}}" alt="home" /></b><span class="hidden-xs"><img src="{{asset('../plugins/images/pixeladmin-text.png')}}" alt="home" /></span></a></div>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
{{--                    <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"> {{ Auth::user()->name }}</b> </a>--}}
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{asset("public/images/".Auth::user()->img)}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"> {{ Auth::user()->name }}</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <form id="logout-form" action="{{ route('getLogout') }}" method="GET" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{route('getLogout')}}}"
                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>

                </li>
            </ul>

        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>


