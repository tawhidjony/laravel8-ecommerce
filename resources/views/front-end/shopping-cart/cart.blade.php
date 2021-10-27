@extends('layouts.frontend.app')

@section('content')
    <div class="row mb-5 ">
        <div class="col-md-10 border rounded shadow p-0 m-0 mx-auto">
            <table class="table mb-0">
                <thead>
                <tr>
                    <th class="align-middle">Image</th>
                    <th class="align-middle">Name</th>
                    <th class="align-middle">Price</th>
                    <th class="align-middle">Qty</th>
                    <th class="align-middle">Total</th>
                    <th class="align-middle">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $grand_total = 0 ;
                @endphp
                @foreach($get_cart_item as $key=> $item)
                    <tr>
                        <td style="width: 10%; vertical-align: middle;">
                            <img src="{{$item->options->image}}" alt="" class="img-fluid shadow" style="width:50px; height: 50px">
                        </td>
                        <td style="width: 40%; vertical-align: middle;">{{$item->name}}</td>
                        <td style="width: 10%; vertical-align: middle;">{{$item->price}}</td>
                        <td style="width: 20%; vertical-align: middle;">
                            <form action="{{route('cart.update')}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="d-flex">
                                    <input type="number" name="qty" value="{{$item->qty}}" class="form-control text-center form-control-sm shadow-sm" style="width:35%">
                                    <button type="submit" class="btn btn-warning btn-sm ml-2 border-0 shadow-sm">Update</button>
                                    <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                </div>
                            </form>
                        </td>
                        <td style="width: 10%; vertical-align: middle;">{{$item->subtotal}}</td>
                        <td style="width: 10%; vertical-align: middle;">
                            <form action="{{route('cart.destroy', $item->rowId)}}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm shadow-sm border-0">X</button>
                            </form>
                        </td>
                    </tr>

                    <input type="hidden" value="{{ $grand_total += $item->subtotal}};">

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mb-5 ">
        <div class="col-md-10 rounded shadow p-0 m-0 mx-auto">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <p  class="mb-0"><strong>Grand Total</strong></p>
                    <p  class="mb-0 mr-5"><strong>{{$grand_total}} TK</strong></p>
                </li>
                <li class="list-group-item d-flex justify-content-end">
                    @if(@auth()->check() && @auth()->user()->type == 'customer')
                        <a href="{{url('/')}}" class="btn btn-secondary btn-sm border-0 mr-2">Continue Shopping</a>
                        <a href="{{route('shipping.address')}}" class="btn btn-secondary btn-sm border-0 mr-5">Checkout</a>
                    @else
                        <a href="{{url('/')}}" class="btn btn-secondary btn-sm border-0 mr-2">Continue Shopping</a>
                        @if(@auth()->check() && @auth()->user()->type == 'admin')
                            <a href="{{url('/')}}" class="btn btn-secondary btn-sm border-0 mr-5 disabled">Admin Can't buy</a>
                        @else
                            <a href="{{route('login')}}" class="btn btn-secondary btn-sm border-0 mr-5">Checkout</a>
                        @endif
                    @endif
                </li>
            </ul>
        </div>
    </div>

@endsection

