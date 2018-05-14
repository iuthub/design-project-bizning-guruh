@extends('layouts.app')
@section('title', 'Product')

@section('main-content')
<div class="container">

		<img src="{{url('images',$product->image)}}" height="400px" width="300" alt="img">
					<div class="product-title">{{$product->name}}</div>

					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price">$ {{$product->price}}</div>
					<div class="product-stock">In Stock</div>
					<hr>
            <a href="{{route('cart.addItem', $product->id)}}"
  class="button btn-success">
      Add to Cart</a>


		<div class="container-fluid">
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">

						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">

							<section class="container product-info">
							{{$product->description}}
							</section>

						</div>
					<div class="tab-pane fade" id="service-two">

						<section class="container">
<p>Lorem ipsum dolor sit adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br>in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur <br>sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
						</section>

					</div>
					<div class="tab-pane fade" id="service-three">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br>in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt <br>in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

@endsection
