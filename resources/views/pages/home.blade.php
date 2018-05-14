@extends('layouts.app')
<!-- @section('title', 'MyShop') -->

@section('main-content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <img src="{{asset('pages/images/main1.gif')}}" width="100%">
      <div class="carousel-caption hidden-xs">
        <br>
        <h5>New Collection</h5>
        <p>Get your product<br> without fee.</p>
          <button class="btn btn-success">READ MORE</button>
      </div>
    </div>

    <div class="item">
      <img src="{{asset('pages/images/main2.gif')}}" width="100%">
      <div class="carousel-caption hidden-xs">
        <br>
        <h5>New Collection</h5>
        <p>Get your product<br> without fee.</p>
        <button class="btn btn-success">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div class="container">
    <div class="shadow">
      @forelse($products as $product)
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="box-customn">
			<div class="img-wrap-tailor">
				<a href="#" class="nohover"><img src="{{url('images',$product->image)}}" width="200" height="200"></a>
				<a href="#" class="onhover"><img src="{{url('images',$product->image)}}" width="200" height="200"></a>
				<span>Quick View</span>
			</div>
			<div class="imfo-area">
        <h5>{{ $product->name}}</h5>
				<h4>$ {{ $product->price}}</h4>
        <a href="{{route('cart.addItem', $product->id)}}" class="btn btn-info">Add To Cart</a>
        <a href="{{route('product',$product->id)}}" class="btn btn-info">Detail</a>
			</div>
		</div>
		</div>
    @empty
  <h3>Empty</h3>
      @endforelse

	</div>
	</div>

  @endsection
