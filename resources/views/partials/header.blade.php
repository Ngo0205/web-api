<!--header-top-starts-->
<div class="header-top">
    <div class="container">
        <div class="head-main">
            <a href="{{route('post.index')}}"><img src="{{asset('coffee_break-web/web/images/logo-1.png')}}"
                                                   alt=""/></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if(Route::has('api-login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('api-login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                @endguest

            </ul>
        </div>
    </div>
</div>
<!--header-top-end-->
<!--start-header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="{{route('post.index')}}" class="active">Home</a></li>
                    <li><a href="{{route('about.index')}}">About</a></li>
                    {{--                    <li><a href="gallery.html">Gallery</a></li>--}}
                    {{--                    <li><a href="typo.html">Typo</a></li>--}}
                    <li><a href="{{route('contact.index')}}">Contact</a></li>
                </ul>

            </div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twit"> </span></a></li>
                    <li><a href="#"><span class="pin"> </span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
