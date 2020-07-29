<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>

    <div id="app">
        
        @if(Auth::check())
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-2">
                <nav class="menu" tabindex="0" >
                <div class="smartphone-menu-trigger"></div>
                    <header class="avatar">
                        <img src="{{ asset(Auth::user()->profile->avatar)}}" />
                        <h2 style="text-transform: uppercase;">{{Auth::user()->name}}</h2>
                    </header>
                    
                    @if(Auth::user()->admin == 1)
                        <div class="" >
                            <ul class="list-group" >
                                <li class="list-group l1"><a href="">Dashboard</a></li>
                                <li class="list-group l2"><a href="{{route('user.create')}}">New admin</a></li>
                                <li class="list-group l3"><a href="{{route('users')}}">Admins</a></li>
                                <li class="list-group l3"><a href="">Agencies</a></li>
                                <li class="list-group l4"><a href="">Edit profile</a></li>
                                <li class="list-group l5"><a href="{{route('category.create')}}">Create Category</a></li>
                                <li class="list-group l6"><a href="{{route('categories')}}">Categories</a></li>
                                <li class="list-group l9"><a href="">Create post</a></li>
                                <li class="list-group l10"><a href="">Posts</a></li>
                                <li class="list-group l11"><a href="">Trashed posts</a></li>
                                <li class="list-group l12"><a href="">Settings</a></li>
                            <br>
                                <!-- <li > -->
                                    <a href="{{ route('logout') }}" class="btn btn-logout " style="margin-left:50px"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out fa-lg" ></i>&nbsp Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                <!-- </li> -->
                            </ul>
                        </div>
                    @else
                    <div class="" >
                            <ul class="list-group" >
                                <li class="list-group l1"><a href=""><i class="fa fa-dashboard fa-lg" ></i>&nbsp Dashboard</a></li>
                                <li class="list-group l4"><a href="{{route('edit.profile')}}"><i class="fa fa-pencil fa-lg" ></i>&nbsp Edit profile</a></li>
                                <li class="list-group l9"><a href="{{route('local.create')}}"><i class="fa fa-plus fa-lg" ></i>&nbsp Add local</a></li>
                                <li class="list-group l10"><a href=""><i class="fa fa-file-image-o fa-lg" ></i>&nbsp All locals</a></li>
                                <li class="list-group l11"><a href=""><i class="fa fa-trash fa-lg" ></i>&nbsp Trashed Locals</a></li>
                                <li class="list-group l12"><a href=""><i class="fa fa-sliders fa-lg" ></i>&nbsp Settings</a></li>
                            <br>
                                <!-- <li > -->
                                    <a href="{{ route('logout') }}" class="btn btn-logout " style="margin-left:50px"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out fa-lg" ></i>&nbsp Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                <!-- </li> -->
                            </ul>
                        </div>
                    @endif
                    
            </nav>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-8    ">
                <main>
                    <!-- <div class=""> -->
                        <div class=" helper" >
                            @yield('content')
                        </div>
                    <!-- </div> -->
                </main>
            </div>
            
                
               
            </div>
        </div>
        @else
        
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
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
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="col-lg-8    ">
                <main>
                    <!-- <div class=""> -->
                        <div class=" helper" >
                            @yield('content')
                        </div>
                    <!-- </div> -->
                </main>
            </div>

            @endif
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    <script>
        toastr.options = {
            "positionClass": "toast-top-center"
        }
        @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}");
        @endif
        @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}");
        @endif
    </script>
    @yield('script')
</body>
</html>
