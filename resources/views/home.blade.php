@extends('layouts.backend.app')

@section('content')
    <div class="small-cards mt-5 mb-4">
        <div class="row">
            <!-- Col sm 6, col md 6, col lg 3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                <!-- Card -->
                <div class="card border-0 rounded-lg">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="far fa-user-circle card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-muted">New Leads</p>
                                <h4 class="font-weight-normal m-0 text-primary">205</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Col sm 6, col md 6, col lg 3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                <!-- Card -->
                <div class="card border-0 rounded-lg">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fas fa-coins card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-muted">Sales</p>
                                <h4 class="font-weight-normal m-0 text-primary">$4021</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Col sm 6, col md 6, col lg 3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                <!-- Card -->
                <div class="card border-0 rounded-lg">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fas fa-shopping-basket card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-muted">Orders</p>
                                <h4 class="font-weight-normal m-0 text-primary">80</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Col sm 6, col md 6, col lg 3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                <!-- Card -->
                <div class="card border-0 rounded-lg">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="far fa-money-bill-alt card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-muted">Expense</p>
                                <h4 class="font-weight-normal m-0 text-primary">$1200</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
