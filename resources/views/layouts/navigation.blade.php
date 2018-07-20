<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="" class="logo"><span>Smart<span>Farm</span></span></a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li>
                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>


                    <li class="dropdown user-box">
                        <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                            <img src={{asset("
                            ")}} alt="user-img" class="img-circle user-img">
                            <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile') }}"><i class="ti-user m-r-5"></i> Profile</a></li>

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>



                            </li>
                        </ul>
                    </li>
                </ul>
            </div>


                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    </div>


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="{{route('home')}}"><i class="zmdi zmdi-view-dashboard"></i> <span> HOME </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('employee')}}"><i class="zmdi zmdi-invert-colors"></i> <span>EMPOYEES RECORDS</span> </a>



                    </li>

                    <li class="has-submenu">
                        <a href="{{route('payments')}}"><i class="zmdi zmdi-collection-text"></i><span>PAYMENT RECORDS</span> </a>

                    </li>

                    <li class="has-submenu">
                        <a href="{{route('supply')}}"><i class="zmdi zmdi-view-list"></i> <span>SUPPLY MANAGEMENT</span> </a>

                    </li>

                    <li class="has-submenu">
                        <a href="{{route('produce')}}"><i class="zmdi zmdi-chart"></i><span>PRODUCE</span> </a>

                    </li>

                    <li class="has-submenu">
                        <a href="{{route('sales')}}"><i class="zmdi zmdi-collection-item"></i><span>SALES</span> </a>

                    </li>

                    <li class="has-submenu">
                        <a href="{{route('statistics')}}"><i class="zmdi zmdi-layers"></i><span>STATISTICS</span> </a>

                    </li>

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->
<body>