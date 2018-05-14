@extends('layouts.app')
@section('title', 'Prdoucts')

@section('main-content')
<<<<<<< HEAD
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
=======
<div class="shop">
					<div class="container">
						<div class="row">

								<div class="products-section">

									<div class="row products" id="box2">
										@forelse($products as $product)
											<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<figure><img src="{{url('images',$product->image)}}" class="img-responsive" ></figure>
												<div class="star">
													<p><i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											</p>
												</div>
												<h3 class="title-of-item">{{ $product->name}}</h3>
												<p class="price">${{ $product->price  }}</p>
												<a  href="{{route('cart.addItem', $product->id)}}" class="button expanded add-to-cart">
									        Add to Cart
									      </a>

										</div>
										@empty
										<h3>Empty</h3>



								</div>
									@endforelse
							</div>
						</div>


		</div>
	</div>
	</div>
	 <!---Row end-->
<!-- <div class="pager">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
  </div> -->

>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad

@endsection
