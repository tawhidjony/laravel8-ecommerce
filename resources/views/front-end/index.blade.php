@extends('layouts.frontend.app')

@section('content')
<div class="row">
    @php
        $all_product = App\Models\Product::all();
        $all_category = App\Models\Category::all();
    @endphp
    <div class="col-md-3">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-header bg-light py-2">
                        <h5 class="text-capitalize font-weight-bold m-0">Filter</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label rounded" for="defaultCheck1">
                                Best Seller
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label rounded" for="defaultCheck1">
                                New Released
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label rounded" for="defaultCheck1">
                                Price - Low to High
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label rounded" for="defaultCheck1">
                                Price - High to Low
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-header bg-light py-2">
                        <h5 class="text-capitalize font-weight-bold m-0">price range</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="range" class="form-control-range" id="formControlRange">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-header bg-light py-2">
                        <h5 class="text-capitalize font-weight-bold m-0">Category</h5>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            @foreach($all_category as $category)
                                <li class="list-group-item">
                                    <a href="{{url('category/product', $category->id)}}" class="text-decoration-none">
                                        {{$category->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-9">

        <div class="row">
            @foreach($all_product as $product)
            <div class="col-md-3">
                <form id="addCartAjax">
                    <div class="card mb-4 rounded-0 shadow-sm">
                        <img src="{{URL::to($product->image)}}" class="card-img-top rounded-0" alt="..." style=" height: 8rem; background-size: cover; ">
                        <div class="card-body">
                            <a href="{{route('product.details', $product->id)}}" class="text-decoration-none">
                                <h5 class="card-title">{{\Illuminate\Support\Str::limit($product->name, 10)}}</h5>
                            </a>
                            <p>Category: <a href="" class="text-decoration-none">{{$product->category->name}} </a></p>
                            <p>{{$product->price}} TK</p>
                           <div class="">
                               <a href="{{route('product.details', $product->id)}}" class="btn btn-block btn-sm btn-dark shadow-sm border-0 ">Add to cart</a>
                               <a href="#" class="btn btn-block btn-sm btn-danger shadow-sm border-0 ">Wishlist</a>
                           </div>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
