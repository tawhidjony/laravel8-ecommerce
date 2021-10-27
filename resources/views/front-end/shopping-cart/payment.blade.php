@extends('layouts.frontend.app')
@push('css')
    <style>
        input[type="radio"]{
            -webkit-appearance: none;
        }
        label>img{
            width: 80px;
            transition: all .5s;
            filter: grayscale(1);
            cursor: pointer;
        }
        input[type="radio"]:checked + label>img{
            filter: grayscale(0);
        }
        .hide-message{
            display: none;
        }
    </style>
@endpush
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
                                    <input type="number" name="qty" value="{{$item->qty}}" class="form-control form-control-sm text-center  shadow-sm" style="width:35%">
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
                <tfoter>
                    <tr>
                        <th colspan="3"></th>
                        <th class="border-right text-center">Grand Total</th>
                        <th colspan="2">{{$grand_total}} TK</th>
                    </tr>
                </tfoter>
            </table>
        </div>
    </div>
    <div class="row mb-5 ">
        <div class="col-md-10 rounded shadow p-0 m-0 mx-auto">
            <div class="card">
                <div class="card-body">

                    <input type="radio" class="payment-type" id="Bkash" name="payment_methods" value="bkash" />
                    <label for="Bkash" ><img src="{{asset('assets/frontend/img/payment/bkash.svg')}}" alt=""></label>

                    <input type="radio" class="payment-type" id="Rocket" name="payment_methods" value="rocket" />
                    <label for="Rocket" ><img src="{{asset('assets/frontend/img/payment/rocket.svg')}}" alt=""></label>

                    <input type="radio" class="payment-type" id="Nagad" name="payment_methods" value="nagad" />
                    <label for="Nagad" ><img src="{{asset('assets/frontend/img/payment/nagad.svg')}}" alt=""></label>

                    <input type="radio" class="payment-type" id="Surecash" name="payment_methods" value="surecash" disabled/>
                    <label for="Surecash" ><img src="{{asset('assets/frontend/img/payment/surecash.svg')}}" alt=""></label>

                    <input type="radio" class="payment-type" id="Ucash" name="payment_methods" value="ucash" disabled/>
                    <label for="Ucash" ><img src="{{asset('assets/frontend/img/payment/ucash.svg')}}" alt=""></label>

                    <div class="row mt-3">
                        <div class="col-md-6 border-right">
                            <div class="show-message ">
                                <h5 class="text-center my-5 mx-5">
                                    আপনি এখন পর্যন্ত  কোন পেমেন্ট মেথড নির্বাচন করেন নাই |<br/> অর্ডার করার পূর্বে  যে কোন একটি পেমেন্ট মেথড নির্বাচন করে নিন ধন্যবাদ |
                                </h5>
                            </div>
                            <div class="show-Bkash" style="display: none; ">
                                <div class="form-group">
                                    <label for="BkashNumber">বিকাশ নাম্বার</label>
                                    <input type="number" name="" value="" id="BkashNumber" class="form-control shadow-sm" placeholder="আপনার বিকাশ নাম্বার দিন ">
                                </div>
                                <div class="form-group">
                                    <label for="BkashTransitionId">বিকাশ ট্রানজেকশন আইডি</label>
                                    <input type="number" name="" value="" id="BkashTransitionId" class="form-control shadow-sm" placeholder="আপনার বিকাশ ট্রানজেকশন আইডি দিন">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-secondary btn-sm shadow-lg" >
                                </div>
                            </div>
                            <div class="show-Rocket" style="display: none; ">
                                <div class="form-group">
                                    <label for="RocketNumber">Rocket Number</label>
                                    <input type="number" id="RocketNumber" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="RocketTransitionId">Rocket Transition Id</label>
                                    <input type="number" id="RocketTransitionId" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-secondary btn-sm" >
                                </div>
                            </div>
                            <div class="show-Nagad" style="display: none; ">
                                <div class="form-group">
                                    <label for="NagadNumber">Nagad Number</label>
                                    <input type="number" id="NagadNumber" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="NagadTransitionId">Nagad Transition Id</label>
                                    <input type="number" id="NagadTransitionId" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-secondary btn-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="show-Bkash" style="display: none; ">
                                <p>
                                    আপনি অর্ডার কনফার্ম  করার পূর্বে এই নাম্বারে  ০১৬৪২৬২৫২৭২
                                    আপনার প্রোডাক্ট এর দাম বিকাশ করুন ।
                                    বিকাশ করার পর আপনার মোবাইল এর মেসেজ থেকে
                                    ট্রানজেকশন  আইডি এবং যে নাম্বার থেকে
                                    বিকাশ করেছেন সেই বিকাশ নাম্বার সহ
                                    পাশে থাকা  ঘর গুলা  ভাল ভাবে পূরণ করুন ।
                                    পাশে থাকা অর্ডার কনফার্ম  বাটনে ক্লিক করুন ।
                                </p>
                                <p><strong>নোট:  অর্ডার কনফার্ম  বাটনে ক্লিক করার পূর্বে আপনার বিকাশ ইনফর্মেশন গুলা পুনরাই ভাল ভাবে দেখে নিন ।</strong> </p>

                            </div>
                            <div class="show-Rocket" style="display: none; ">
                                <p>
                                    আপনি অর্ডার কনফার্ম  করার পূর্বে এই নাম্বারে  ০১৭৩৯৯০৫৭৩০-৭  আপনার প্রোডাক্ট এর দাম রকেট  এর মাধ্যমে পরিষদ করুন । রকেট  করার পর আপনার মোবাইল এর মেসেজ থেকে ট্রানজেকশন  আইডি এবং যে নাম্বার থেকে রকেট  করেছেন সেই রকেট  নাম্বার সহ পাশে থাকা ঘর গুলা ভাল ভাবে পূরণ করুন । পাশে থাকা অর্ডার কনফার্ম  বাটনে ক্লিক করুন ।

                                </p>
                                <p><strong>নোট:  অর্ডার কনফার্ম  বাটনে ক্লিক করার পূর্বে আপনার রকেট  ইনফর্মেশন গুলা পুনরাই ভাল ভাবে দেখে নিন ।</strong> </p>
                            </div>
                            <div class="show-Nagad" style="display: none; ">
                                <p>
                                    আপনি অর্ডার কনফার্ম  করার পূর্বে এই নাম্বারে  ০১৭৩৯৯০৫৭৩০  আপনার প্রোডাক্ট এর দাম নগদ এর মাধ্যমে পরিষদ করুন । নগদ করার পর আপনার মোবাইল এর মেসেজ থেকে ট্রানজেকশন  আইডি এবং যে নাম্বার থেকে নগদ করেছেন সেই নগদ নাম্বার সহ পাশে থাকা ঘর গুলা ভাল ভাবে পূরণ করুন । পাশে থাকা অর্ডার কনফার্ম  বাটনে ক্লিক করুন ।
                                </p>
                                <p><strong>নোট:  অর্ডার কনফার্ম  বাটনে ক্লিক করার পূর্বে আপনার নগদ ইনফর্মেশন গুলা পুনরাই ভাল ভাবে দেখে নিন । </strong> </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $(document).on('change', '.payment-type', function (){
            let payment_method = $(this).val();
            if (payment_method == 'bkash'){
                $('.show-message').addClass("hide-message");
                $('.show-Bkash').fadeIn('slow');
                $('.show-Rocket').hide();
                $('.show-Nagad').hide();
            }else if(payment_method == 'rocket'){
                $('.show-Bkash').hide();
                $('.show-Rocket').fadeIn('slow');
                $('.show-Nagad').hide();
            }else if(payment_method == 'nagad'){
                $('.show-Bkash').hide();
                $('.show-Rocket').hide();
                $('.show-Nagad').fadeIn('slow')
                    .css( {'opacity': 0, 'bottom': '-100px' } )
                    .animate( { 'opacity': '1', 'bottom' : 0 }, 1000 );
                ;
            }


        })
    </script>
@endpush

