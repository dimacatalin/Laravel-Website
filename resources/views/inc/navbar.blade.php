<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container">
    <a id="csz" class="navbar-brand text-warning" href="{{ url('/') }}">
        <b>Riftul Invocatorului</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="/" id="csz" class="nav-link text-warning"><b>Acasa</b></a></li>
            <li class="nav-item"><a href="/about" id="csz" class="nav-link text-warning"><b>Despre</b></a></li>
            <li class="nav-item"><a href="/services" id="csz" class="nav-link text-warning"><b>Servicii</b></a></li>
            @if (Auth::check())

            <li class="nav-item"><a href="/posts" id="csz" class="nav-link text-warning"><b>Tutoriale</b></a></li>

            @endif

            @if (Auth::check())

            <li class="nav-item"><a href="/qandas" id="csz" class="nav-link text-warning"><b>FAQ</b></a></li>

            @endif

            @if (Auth::check() && Auth::user()->rol == 0)

            <li class="nav-item"><a href="/vodreviews" id="csz" class="nav-link text-warning"><b>Recenzii video</b></a></li>

            @endif

            @if (Auth::check() && Auth::user()->rol == 1)

            <li class="nav-item"><a href="/feedback" id="csz" class="nav-link text-warning"><b>Raspundere Recenzii</b></a></li>

            @endif 
            
        </ul>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a id="csz" class="nav-link text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a id="csz" class="nav-link text-warning" href="{{ route('register') }}">{{ __('Inregistrare') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"  class="nav-link dropdown-toggle text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (Auth::check() && Auth::user()->rol == 1 )

                        <a class="dropdown-item" href="{{ route('home') }}">
                            Tutorialele Tale
                        </a>

                        @endif
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

            
                    {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('home') }}">Postarile tale</a>
                        
                    </div> --}}
                </li>
                
            @endguest
        </ul>
    </div>
</div>
</nav>