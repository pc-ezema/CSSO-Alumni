@extends('layouts.admin_dashboard')

@section('page-content')          
    <!-- begin app-container -->
    <div class="app-container">
        <!-- begin app-nabar -->
        @section('navbar')
            @includeIf('layouts.admin_navbar')
        @endsection
        <!-- end app-navbar -->
        <!-- begin app-main -->
        <div class="app-main" id="main">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin row -->
                <div class="row">
                    <div class="col-md-12 m-b-10">
                        <!-- begin page title -->
                        <div class="d-block d-lg-flex flex-nowrap align-items-center">
                            <div class="page-title mr-4 pr-4 border-right">
                                <h4 class="hey">Welcome Back {{Auth::user()->first_name}}
                                </h4>
                            </div>
                        </div>
                        
                        <!-- end page title -->
                    </div>
                </div>
                <!-- begin row -->
                <!-- Advertising -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="color">
                            <div class="text">
                                <h2>
                                    {{$total_members->count()}}
                                </h2>
                                <h1>
                                    Members 
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="color" style="background-color: #264774;">
                            <div class="text">
                                <h2>
                                    {{$dd->count()}}
                                </h2>
                                <h1>
                                    Total Donations/Dues 
                                </h1>
                            </div>
                        </div>  
                    </div>
                </div>
                <!-- Advertising Ends -->

                <!-- Services -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="longer">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-heading">
                                        <h4 class="card-title">Payment History</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="activity ml-0">
                                        @if($payment_histories->isEmpty())
                                        <li class="activity-item primary">
                                            <div class="activity-info">
                                                <h5 class="mb-0">No Payment History</h5>
                                            </div>
                                        </li>
                                        @else
                                        @foreach($payment_histories as $payment_history)
                                        <li class="activity-item primary">
                                            <div class="activity-info">
                                                <h5 class="mb-0">{{$payment_history->donation_due_title}}</h5>
                                                <span style="color: #bd3c50;">{{$payment_history->paid_at}} - {{$payment_history->status}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header d-flex justify-content-between">
                                <div class="card-heading">
                                    <h4 class="card-title">Payment Request</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="{{route('admin.payment.request')}}" class="btn btn-round btn-inverse-primary btn-xs" style="background: #264774 !important; color: #fff;">View All</a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if($donation_dues->isEmpty())
                                <div class="row active-task m-b-20">
                                    <div class="col-12">
                                        <h5 class="mb-0"><a href="#">No Payment Reqeust</a></h5>
                                    </div>
                                </div>
                                @else
                                @foreach($donation_dues as $donation_due)
                                <div class="row active-task m-b-20">
                                    <div class="col-9">
                                        <small style="color: #264774" class="d-block mb-1">₦{{number_format($donation_due->amount, 2)}}</small>
                                        <h5 class="mb-0"><a href="#">{{$donation_due->title}}</a></h5>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <small> {{$donation_due->description}}</small>
                                            </li>
                                            <li class="list-inline-item">|</li>
                                            <li class="list-inline-item">
                                                <small>{{$donation_due->created_at->diffForHumans()}}</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Ends -->
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end app-main -->
    </div>
    <!-- end app-container -->
@endsection