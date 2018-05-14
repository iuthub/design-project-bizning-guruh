
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
