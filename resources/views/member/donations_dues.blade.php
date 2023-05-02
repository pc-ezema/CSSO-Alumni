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
                    <div class="col-md-12 m-b-30">
                        <!-- begin page title -->
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                            <div class="page-title mb-2 mb-sm-0">
                                <h1>Donations/Dues</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="/member/dashboard"><i class="ti ti-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            Donations/Dues
                                        </li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Donations/Dues</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <!-- begin row -->
                <div class="row">
                    <div class="col-12 mb-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header d-flex justify-content-between">
                                <div class="card-heading">
                                    <h4 class="card-title">Donations/Dues</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                @forelse($my_donations as $donation_due)
                                    @if($donation_due['all']['user_id'] == Auth::user()->id)
                                    <div class="row active-task m-b-20">
                                        <div class="col-lg-1">
                                            <div class="bg-type mt-1">
                                                <span>{{strtoupper(substr($donation_due['all']['title'], 0, 2))}}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 class="mb-0"><a href="#">{{$donation_due['all']['title']}} - ₦{{number_format($donation_due['all']['amount'], 2)}}</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">
                                                    <small> {{$donation_due['all']['description']}}</small>
                                                </li>
                                                <li class="list-inline-item">|</li>
                                                <li class="list-inline-item">
                                                    <small>{{$donation_due['all']['created_at']->toDayDateTimeString()}}</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="mb-0"><a href="#">Paid - ₦{{number_format($donation_due['paid'], 2)}}</a></h5>
                                        </div>
                                        @if($donation_due['paid'] >= $donation_due['all']['amount'])
                                        <div class="col-lg-3">
                                            <a href="#" class="btn btn-success btn-round btn-xs" style="cursor: pointer">Payment Completed</a>
                                        </div>
                                        @else
                                        <div class="col-lg-3">
                                            <a href="#" data-toggle="modal" data-target="#proceed-{{$donation_due['all']['id']}}"  class="btn btn-primary btn-round btn-xs" style="cursor: pointer">Make Payment</a>
                                        </div>
                                        @endif

                                        <div class="modal fade" id="proceed-{{$donation_due['all']['id']}}" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-right" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Proceed To Payment</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('payment', Crypt::encrypt($donation_due['all']['id'])) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="amount">Amount</label>
                                                                <input type="number" class="form-control" id="amount" name="amount">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Request</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($donation_due['all']['admin_id'])
                                    <div class="row active-task m-b-20">
                                        <div class="col-lg-1">
                                            <div class="bg-type mt-1">
                                                <span>{{strtoupper(substr($donation_due['all']['title'], 0, 2))}}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 class="mb-0"><a href="#">{{$donation_due['all']['title']}} - ₦{{number_format($donation_due['all']['amount'], 2)}}</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">
                                                    <small> {{$donation_due['all']['description']}}</small>
                                                </li>
                                                <li class="list-inline-item">|</li>
                                                <li class="list-inline-item">
                                                    <small>{{$donation_due['all']['created_at']->toDayDateTimeString()}}</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="mb-0"><a href="#">Paid - ₦{{number_format($donation_due['paid'], 2)}}</a></h5>
                                        </div>
                                        @if($donation_due['paid'] >= $donation_due['all']['amount'])
                                        <div class="col-lg-3">
                                            <a href="#" class="btn btn-success btn-round btn-xs" style="cursor: pointer">Payment Completed</a>
                                        </div>
                                        @else
                                        <div class="col-lg-3">
                                            <a href="#" data-toggle="modal" data-target="#proceed-{{$donation_due['all']['id']}}"  class="btn btn-primary btn-round btn-xs" style="cursor: pointer">Make Payment</a>
                                        </div>
                                        @endif

                                        <div class="modal fade" id="proceed-{{$donation_due['all']['id']}}" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-right" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Proceed To Payment</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('payment', Crypt::encrypt($donation_due['all']['id'])) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="amount">Amount</label>
                                                                <input type="number" class="form-control" id="amount" name="amount">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Request</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @empty
                                <div class="row active-task m-b-20">
                                    <div class="col-12">
                                        <h5 class="mb-0"><a href="#">No Donations/Dues</a></h5>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end app-main -->
    </div>
    <!-- end app-container -->
@endsection