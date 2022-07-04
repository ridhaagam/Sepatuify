    <!--Header Mulai-->
 <header class="{{ \Route::current()->getName() == 'index' ? 'absolute' : '' }} w-full z-50 px-4">    
      <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top"
        style="background-color: #293023">
      <!-- Logo  -->
      <a class="navbar-brand" href="{{ route('index') }}"
        ><img src="frontend/img/logo.png" style="width: 50px; height: 50px"
      /></a>


        <!-- Navbar links -->
        <div class="collapse navbar-collapse mx-auto justify-content-md-center" id="collapsibleNavbar">
            <ul class="navbar-nav col-md-auto">
                <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link"   href="{{ route('index') }}">Home</a>
                </li>

                <li class="nav-item dropdown {{ Request::is('menu') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item {{ \Route::current()->getName() }}" href="{{ route('kalkulator') }}">Kalkulator</a>
                        <a class="dropdown-item {{ \Route::current()->getName() }}" href="{{ route('favourite') }}">Favourite</a>
                        <a class="dropdown-item {{ \Route::current()->getName() }}" href="{{ route('about') }}">About</a>
                    </div>
                </li>
              @auth
                  <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}" class="nav-link {{ \Route::current()->getName() }} "
                      >Dashboard</a
                    >
                  </li>
              @endauth
              @guest
                  <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ \Route::current()->getName()  }}"
                      >Login</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link {{ \Route::current()->getName()}} "
                      >Register</a
                    >
                  </li>
              @endguest
            </ul>
        </div>
    </nav>
    <!-- Header -->
    {{-- <nav>
        <label class="logo" ">StayCozy</label>
        <ul>
            <li><a class="" href="{{ route('index') }}">Home</a></li>
            <li>
                <a href="#">Menu
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="#" class="{{ \Route::current()->getName() }}">Kalkulator</a></li>
                    <li><a href="#">Form</a></li>
                    <li><a href="#">Favourite</a></li>
                    <li><a href="#">About</a></li>

                </ul>
            </li>
        </ul>
    </nav> --}}
        </header>
    <!--Header Selesai-->
<!-- START: HEADER -->
   

<!-- END: HEADER -->