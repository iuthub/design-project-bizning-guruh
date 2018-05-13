<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{


    public function shipping()
    {
        return view('pages.shipping-info');
    }

    public function payment()
    {
        return view('pages.payment');
    }

    public function storePayment(Request $request)
    {

       Order::createOrder();
        Cart::destroy();

        //redirect user to some page
        return redirect()->route('myshop');

    }


}
