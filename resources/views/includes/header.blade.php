
<header class="header" id="site-header">
        <div class="container-fluid">
                <div class="header-content-wrapper">
                    <div class="logo">
                        <div class="logo-text">
                            <img src="{{asset('img/logo2.png')}}" width="90px" height="60px">
                            <div class="logo-title"></div> 
                        </div>
                    </div>

                    <nav id="primary-menu" class="primary-menu">
                        <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                            <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                                <svg width="1000px" height="1000px">
                                    <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path id="pathE" d="M 300 500 L 700 500"></path>
                                    <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="primary-menu-menu navh" style="overflow: hidden;">
                        
                            <li class="">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li class="">
                                <a href="{{route('index')}}#explore">Explore</a>
                            </li>
                            <li class="">
                                <a href="{{route('index')}}#site-footer">About Us</a>
                            </li>
                            <li class="">
                                <a href="/contact">Contact Us</a>
                            </li>
                        </ul>
                        @if (Auth::guest())
                        <ul class="primary-menu-menu log" style="">
                            
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                        @else
                            
                            <!-- </ul> -->
                            
                        
                        
                            <ul class="primary-menu-menu" style="margin-left:550px">
                                <li class="dropdown2">
                                    <a href="javascript:void(0)" class="dropbtn">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-content">
                                        <a href="{{route('home')}}">Profile</a>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    </div>
                                </li>
                            </ul>
                        @endif
                    
                    </nav>
                   
                    
                    <ul class="nav-add">
                        <li class="search search_main" style="color: black; margin-top: 0px;">
                            <a href="#" class="js-open-search">
                                <i class="seoicon-loupe"></i>
                            </a>
                        </li>
                        
                    </ul>
                    
                </div>
                
        </div>
    </header>
    
