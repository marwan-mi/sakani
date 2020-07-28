<div class="">
        <nav class="navbar navbar-default navbar-static-top" style="position:fixed;width:100%;z-index:100">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand " style="padding:7px" href="{{ url('/') }}">
                    <img src="img/logo2.png" width="50px" height="35px">
                    </a>
                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="nav navbar-nav" style="margin-left:15%">
                        <li class="navigation__item primary-menu-menu"><a href="{{route('home')}}" class="is-active">Home</a></li>
                        <li class="navigation__item primary-menu-menu"><a href="home#explore">Explore</a></li>
                        <li class="navigation__item primary-menu-menu"><a href="home#about">About Us</a></li>
                        <li class="navigation__item primary-menu-menu"><a href="home#contact">Contact</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-left:10%">
                        <!-- Authentication Links -->
                            
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <!-- <li class="dropdown"> -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            <!-- </li> -->
                        @endif
                    </ul>
                </div>
            </div>
            <!-- <div style="width:100%;height:3px;border-top:1px solid orange"></div> -->
        </nav>
</div>