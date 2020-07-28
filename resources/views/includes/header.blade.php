<header class="header" id="site-header">
        <div class="container">
                <div class="header-content-wrapper">
                    <div class="logo">
                        <div class="logo-text">
                            <img src="{{asset('img/logo2.png')}}" width="90px" height="60px">
                            <div class="logo-title"></div> 
                        </div>
                    </div>

                    <nav id="primary-menu" class="primary-menu">
                        <!-- <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                            <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                                <svg width="1000px" height="1000px">
                                    <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path id="pathE" d="M 300 500 L 700 500"></path>
                                    <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                            </span>
                        </a> -->
                        <ul class="primary-menu-menu" style="overflow: hidden;">
                        
                            <li class="">
                                <a href="">Home</a>
                            </li>
                            <li class="">
                                <a href="">Explore</a>
                            </li>
                            <li class="">
                                <a href="">About Us</a>
                            </li>
                            <li class="">
                                <a href="">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="primary-menu-menu" style="margin-left:300px">
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li>
                                <a href="{{route('home')}}" class="dropdown-toggle" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>

                            <!-- <ul class="dropdown-menu" role="menu"> -->
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
                            <!-- </ul> -->
                            
                        @endif
                        </ul>
                        
                    
                    </nav>
                   
                    
                    <!-- <ul class="nav-add">
                        <li class="search search_main" style="color: black; margin-top: 5px;">
                            <a href="#" class="js-open-search">
                                <i class="seoicon-loupe"></i>
                            </a>
                        </li>
                        
                    </ul> -->
                    
                </div>
                
        </div>
    </header>
    
