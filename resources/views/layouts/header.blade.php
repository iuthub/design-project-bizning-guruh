<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="{{route('myshop')}}">MyShop.uz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      @guest
      <li class="nav-item disabled">
        <a class="nav-link" href="{{ route('login') }}">Home</a>
      </li>
      @else
      <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('myshop') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      @endguest
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('cart.index')}}">
          <i class="fa fa-shopping-cart"></i> Shopping Cart<span class="badge badge-secondary badge-pill"></span>
        </a>
      </li>
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
      @else

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://Ecommerce/user" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img style="width: 25px; border-radius: 50%;" src="{{asset('pages/images/user.png')}}" alt="profile img">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Profile</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        </div>
      </li>
      @endguest
    </ul>

  </div>
</nav>
