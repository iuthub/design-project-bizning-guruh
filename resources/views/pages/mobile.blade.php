@extends('layouts.app')
@section('title', 'Prdoucts')

@section('main-content')
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
			<p>Get your product</p>
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
