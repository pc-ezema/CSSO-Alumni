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
                    <div class="col-xxl-4 mb-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header d-flex justify-content-between">
                                <div class="card-heading">
                                    <h4 class="card-title">Donations/Dues</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                @if($donation_dues->isEmpty())
                                <div class="row active-task m-b-20">
                                    <div class="col-12">
                                        <h5 class="mb-0"><a href="#">No Donations/Dues</a></h5>
                                    </div>
                                </div>
                                @else
                                @foreach($donation_dues as $donation_due)
                                <div class="row active-task m-b-20">
                                    <div class="col-1">
                                        <div class="bg-type mt-1">
                                            <span>{{strtoupper(substr($donation_due->title, 0, 2))}}</span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mb-0"><a href="#">{{$donation_due->title}} - ₦{{number_format($donation_due->amount, 2)}}</a></h5>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <small> {{$donation_due->description}}</small>
                                            </li>
                                            <li class="list-inline-item">|</li>
                                            <li class="list-inline-item">
                                                <small>{{$donation_due->created_at->toDayDateTimeString()}}</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <form method="POST" action="{{ route('payment', Crypt::encrypt($donation_due->id)) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-round btn-xs" style="cursor: pointer">Make Payment</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                                @endif
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