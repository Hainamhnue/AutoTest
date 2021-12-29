<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
        <div class="top-left-part"><a class="logo" href="{{url('user/tu-danh-gia/create')}}"><b><img src="{{asset('../plugins/images/ToeValuate.png')}}" alt="home" class="img-circle" width="50px" height="50px"></b><span class="hidden-xs"><img src="{{asset('../plugins/images/untitled-1.png')}}" alt="home" /></span></a></div>
{{--        <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">--}}
{{--            <li>--}}
{{--                <form role="search" class="app-search hidden-xs">--}}
{{--                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        </ul>--}}
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{asset("public/images/".Auth::user()->img)}}" alt="user-img" width="36px" class="img-circle"><b class="hidden-xs"> {{ Auth::user()->name }}</b>
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
