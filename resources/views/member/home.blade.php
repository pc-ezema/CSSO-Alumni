@extends('layouts.dashboard')

@section('page-content')
<!-- begin app-container -->
<div class="app-container">
    <!-- begin app-nabar -->
    @section('navbar')
    @includeIf('layouts.navbar')
    @endsection
    <!-- end app-navbar -->
    <!-- begin app-main -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-12 m-b-30">
                    <!-- begin page title -->
                    <div class="user-welcome d-block  flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-xl-0">
                            <h1 class="mb-1">{{$greetings}}, {{Auth::user()->title}} {{Auth::user()->surname}} {{Auth::user()->first_name}} {{Auth::user()->second_name}}!
                            <span class="float-right">{{Auth::user()->membership_id}}</span></h1>
                            <p>You have <span style="color: #264774">{{$self->count()}}</span> messages and notifications to respond from Admin to You.</p>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            </div>
            <!-- begin row -->
            <!-- Advertising -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="color">
                        <div class="text">
                            <h2>
                                {{$general_notifications->count() + $self_notifications->count()}}
                            </h2>
                            <h1>
                                Total Notifications
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="color" style="background-color: #264774;">
                        <div class="text">
                            <h2>
                                {{$donation_dues->count()}}
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
                <div class="col-lg-6 col-xl-6 m-b-30">
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
                <div class="col-lg-6 col-xl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">General Notifications/Messages</h4>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-round btn-inverse-primary btn-xs" href="{{route('view.general.messages_notifications')}}">View all </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($generals->isEmpty())
                            <div class="row active-task m-b-20">
                                <div class="col-12">
                                    <h5 class="mb-0"><a href="#">No Message From Admin</a></h5>
                                </div>
                            </div>
                            @else
                            <div class="row active-task m-b-20">
                                @foreach($generals as $general)
                                <div class="col-12">
                                    <h5 class="mb-0"><a href="#">{{$general->subject}}</a></h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <small> Created by {{$general->from}}</small>
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">
                                            <small>{{$general->created_at->toDayDateTimeString()}}</small>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
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