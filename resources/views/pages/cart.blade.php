@extends('layouts.app')
@section('title', 'Cart')

@section('main-content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Product name</th>
                            <th scope="col">Short Description</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($cartItems as $cartItem)
                        <tr>
<<<<<<< HEAD
                            <td>{{$cartItem->name}}</td>
                            <td>Description</td>
=======
                            <td><img src="{{url('images',$cartItem->image)}}" /> </td>
                            <td>{{$cartItem->name}}</td>
                            <td>In stock</td>
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad
                            <td width="50px">
                       {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                       <input name="qty" type="text" value="{{$cartItem->qty}}">
                   </td>
                            <td class="text-right">$ {{$cartItem->price}}</td>
                            <td>

                   </td>
                   <td>
                       <input style="float: left"  type="submit" class="button success small" value="Ok">
                       {!! Form::close() !!}

                       <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>

                        </form>
                   </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total</td>
<<<<<<< HEAD
                            <td class="text-right">$ {{Cart::subtotal()}}</td>
=======
                            <td class="text-right">{{Cart::subtotal()}}</td>
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">$ 0.00 </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Sub-Total</strong></td>
<<<<<<< HEAD
                            <td class="text-right"><strong>$ {{Cart::subtotal()}}</strong></td>
=======
                            <td class="text-right"><strong>{{Cart::subtotal()}}</strong></td>
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{route('checkout.shipping')}}" class="btn btn-lg btn-block btn-success text-uppercase" type="submit">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
