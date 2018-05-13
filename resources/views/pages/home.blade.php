@extends('layouts.app')
@section('title', 'MyShop')

@section('main-content')
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="{{asset('pages/images/1.jpg')}}"
          width="100%" height="500"
        alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="{{asset('pages/images/2.jpg')}}" width="100%" height="500" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="{{asset('pages/images/3.jpg')}}" width="100%" height="500" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">

          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container">
  	<div class="row">

      <!-- begin loop -->
      	@forelse($products as $product)
  		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  		<div class="my-list">
  			<img src="{{url('images',$product->image)}}"
width="200" height="200"
         alt="dsadas" />
  			<h3>{{ $product->name}}</h3>
  			<span>RS:45K</span>
  			<span class="pull-right">SKU:100022</span>
  			<div class="offer">{{ $product->price}}</div>

  			<a href="{{route('cart.addItem', $product->id)}}" class="btn btn-info">Add To Cart</a>
  			<a href="{{route('product',$product->id)}}" class="btn btn-info">Deatil</a>
  			</div>
  		</div>
      @empty
                          <h3>Empty</h3>
      	@endforelse




      <!-- endforloop -->
  		</div>

  </div>



  @endsection
