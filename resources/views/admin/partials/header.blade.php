<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark px-3">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center"
        href="{{ route('admin.home') }}">
        <div class="logo_laravel">
          LOGO
        </div>
      </a>
      <div class="collapse navbar-collapse"
        id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link"
              href="{{ route('home') }}"
              target="_blank">vai al sito</a>
          </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
              <a class="nav-link"
                href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link"
                  href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item">
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn nav-link text-uppercase">Logout</button>
              </form>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
</header>
