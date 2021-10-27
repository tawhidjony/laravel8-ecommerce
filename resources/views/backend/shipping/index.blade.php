@extends('layouts.backend.app')

@section('content')
    <form action="{{route('shipping.store')}}" method="POST">
        @csrf

        <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="name" value="" class="form-control" placeholder="Enter your name" />
        </div>

        <div class="form-group">
            <label for="Name">phone</label>
            <input type="text" id="Name" name="phone" value="" class="form-control" placeholder="Enter your phone" />
        </div>

        <div class="form-group">
            <label for="Name">address</label>
            <input type="text" id="Name" name="address" value="" class="form-control" placeholder="Enter your address" />
        </div>

        <div class="form-group">
           <button class="btn btn-primary">ADD</button>
        </div>
    </form>
@endsection
name

