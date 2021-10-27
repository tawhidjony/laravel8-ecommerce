@extends('layouts.frontend.app')

@section('content')
    <div class="row border mb-5 rounded shadow">
        <form action="{{route('add.cart')}}" method="POST" class="d-flex">
            @csrf
            <input type="hidden" name="id" value="{{$product_details->id}}">
            <div class="col-md-5">
                <div class="product-img-area my-5 mx-5">
                    <img src="{{URL::to($product_details->image)}}" class="img-fluid shadow" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-area my-5 mx-5">
                    <h2 class="my-3">{{$product_details->name}}</h2>
                    <h5><b>Category</b>: {{$product_details->category->name}}</h5>
                    <h5 class="my-3">Price: {{$product_details->price}} TK </h5>
                    <div class="form-group d-flex">
                        <div class="col-md-6 p-0 m-0">
                            <input type="number" name="qty" class="form-control text-center" value="1" autocomplete="off">
                        </div>
                        <button type="submit"  class="btn btn-warning ml-2">Add to cart</button>
                        <button type="submit" class="btn btn-danger ml-2">Add Wishlist</button>
                    </div>
                    <h5>Product Details</h5>
                    <p>{{$product_details->product_details}}</p>
                </div>
            </div>
        </form>
    </div>

@endsection

