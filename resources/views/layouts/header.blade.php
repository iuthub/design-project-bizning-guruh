<<<<<<< HEAD
=======
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
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad

   <nav class="top-bar">
     <div class="container">
       <div class="row">
       <div class="col-sm-4 hidden-xs">
           <span class="nav-text">
               <i class="fa fa-phone" aria-hidden="true"></i>  +99 897 7373538
               <i class="fa fa-envelope" aria-hidden="true"></i> shakhzodurinboev@gmail.com</span>
           </div>
       <div class="col-sm-4 text-center">
           <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
           <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
           <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
           <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
           <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
           <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
           </div>
       <div class="col-sm-4 text-right hidden-xs">
               <ul class="tools">

               @guest
                                           <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                           <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
@else
<li><a class="nav-link" href="#">{{Auth::user()->name}}</a></li>
<li><a class="nav-link" href="{{route('logout')}}">Logout</a></li>

@endguest
               </ul>
             </div>
       </div>
     </div>
   </nav>
<nav class="navbar navbar-inverse">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-left">
       <li class=""><a href="{{route('myshop')}}">Home</a></li>
       <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="{{route('products')}}">Products</a></li>
           <li><a href="{{route('computers')}}">Computers</a></li>
           <li><a href="{{route('mobile')}}">Mobile Phones</a></li>
         </ul>
       </li>
       <li><a href="{{route('aboutus')}}">about us</a></li>
       <li><a href="#">contact us</a></li>
     </ul>
     <form class="navbar-form navbar-right">
     <div class="input-group">
       <div class="input-group-btn">
         <button class="btn btn-default-1" type="submit">
           <i class="glyphicon glyphicon-search"></i>
         </button>
       </div>
   <input type="text" class="form-control" placeholder="Search">
     </div>
       <span class="cart-heart  hidden-sm hidden-xs">
           <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
           <a href="{{route('cart.index')}}"><i class="fa fa-cart-plus" aria-hidden="true"> {{Cart::count()}}</i></a>
       </span>

   </form>

   </div>
 </div>
</nav>
