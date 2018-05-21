      <!-- Fixed navbar -->
      {{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Utterly Free</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">


          <ul class="navbar-nav mr-auto">
            <li class="nav-item"> --}}
              {{-- <a class="nav-link" href="/about">About</a> --}}
            {{-- </li> --}}
            {{-- <li class="nav-item"> --}}
              {{-- <a class="nav-link" href="/contact">Contact</a> --}}
            {{-- </li>
          </ul>

          <div class="navbar-nav form-inline mt-2 mt-md-0">
              <a class="nav-link nav-item" href="/posts">Posts</a>
              <a class="nav-link nav-item" href="/about">About</a>
              <a class="nav-link nav-item" href="/contact">Contact</a>
          </div>

        </div>
      </nav> --}}


      {{-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}



{{-- --------------- --}}
{{-- --------------- --}}
{{-- --------------- --}}
{{-- --------------- --}}
{{-- --------------- --}}
{{-- --------------- --}}




      <nav class="navbar navbar-expand-md navbar-light navbar-laravel  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link nav-item" href="/posts">Flavors</a></li>
                        <li><a class="nav-link nav-item" href="/about">About</a></li>
                        <li><a class="nav-link nav-item" href="/contact">Contact</a></li>
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('|') }}</a></li>
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    
                        @else
                        
                        <li><a class="nav-link nav-item" href="/posts">Flavors</a></li>
                        <li><a class="nav-link nav-item" href="/about">About</a></li>
                        <li><a class="nav-link nav-item" href="/contact">Contact</a></li>
                        
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/dashboard">Dashboard
                                    </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>