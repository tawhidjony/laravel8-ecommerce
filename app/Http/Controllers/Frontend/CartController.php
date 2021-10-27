<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\repositories\ShippingRepository;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //add to cart start
    public function cartIndex(){
        $get_cart_item = Cart::content();
        return view('front-end.shopping-cart.cart', compact('get_cart_item'));
    }
    public function cartItemAdd(Request $request){
        $product = Product::find($request->id);
        $addCart = Cart::add([
                    'id'        =>  $request->id,
                    'name'      =>  $product->name,
                    'price'     =>  $product->price,
                    'qty'       =>  $request->qty,
                    'weight'    =>  '0',
                    'options'   =>  [
                                        'image' => $product->image,
                                    ]

        ]);
        if($addCart){
            notify()->success('Product added Successfully', '', ['timeOut' => 500]);
            return redirect()->route('cart.index');
        }else{
            return view('/');
        }
    }
    public function cartItemAjax(Request $request){
        dd($request->all());
   /*     $product = Product::find($request->id);
        $addCart = Cart::add([
            'id'        =>  $request->id,
            'name'      =>  $product->name,
            'price'     =>  $product->price,
            'qty'       =>  $request->qty,
            'weight'    =>  '0',
            'options'   =>  [
                'image' => $product->image,
            ]

        ]);
        if($addCart){
            return response()->json($addCart);
        }else{
            return view('/');
        }*/
    }
    public function cartUpdate(Request $request){

        Cart::update($request->rowId, $request->qty);

        return redirect()->back();
    }
    public function cartDestroy($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }
    //add to cart end


    //add to shipping address start
    public function shippingAddressStore(Request $request){
        $shipping = ShippingRepository::Store_All($request->all());
        Session::put('sipping_id', $shipping->id);
        notify()->success('Shipping Address Added Successfully', '', ['timeOut' => 2000]);
        return redirect()->route('shopping.payment');
    }



}
