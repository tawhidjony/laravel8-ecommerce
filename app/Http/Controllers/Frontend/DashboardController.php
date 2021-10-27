<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class DashboardController extends Controller
{
    public function index(){
        notify()->success('Login Successfully', '', ['timeOut' => 1000]);
        return view('front-end.customer-dashboard.index');
    }

    public function cartPayment(){
        $get_cart_item = Cart::content();
        return view('front-end.shopping-cart.payment', compact('get_cart_item'));
    }
}
