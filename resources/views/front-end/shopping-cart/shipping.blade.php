@extends('layouts.frontend.app')

@section('content')
    <div class="row mb-5 ">
        <div class="col-md-6 border rounded shadow p-0 m-0 mx-auto">
            <form action="{{route('shipping.address.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                       <p class="text-center"><i class="fas fa-shipping-fast fa-3x"></i></p>
                    </div>
                    <div class="card-body">

                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" name="name" value="" id="fullName"  class="form-control" placeholder="username" >
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="email" id="Email" class="form-control" placeholder="email" value="" >
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone"  id="phone" class="form-control" placeholder="phone" value="" >
                            </div>
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <textarea name="address" id="Address" cols="30" rows="3" class="form-control"> </textarea>
                            </div>
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="form-group">
                                <button class="btn btn-success btn-sm float-right" type="submit">Submit</button>
                                <a href="{{route('cart.index')}}" class="btn btn-dark btn-sm float-right mr-2" type="submit">Back</a>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

