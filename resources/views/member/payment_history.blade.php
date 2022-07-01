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
                                <h1>Payment History</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="/member/dashboard"><i class="ti ti-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            Members
                                        </li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">View All Payment History</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <!-- begin row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="export-table-wrapper datatable-wrapper table-responsive">
                                    <div class="export-buttons m-b-20">
                                        <a href="#" id="exportExcel" class="btn btn-primary">Export To Excel</a>
                                        <a href="#" id="exportCSV" class="btn btn-primary">Export To CSV</a>
                                    </div>
                                    <table id="datatable export-table" class="display compact table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Donation/Due ID</th>
                                                <th>Donation/Due Title</th>
                                                <th>Name</th>
                                                <th>Transaction ID</th>
                                                <th>Reference ID</th>
                                                <th>Paid At</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        @if($payments->isEmpty())
                                        <tbody>
                                            <tr>
                                                <td class="align-enter text-dark font-15" colspan="6">No Payment.</td>
                                            </tr>
                                        </tbody>
                                        @else
                                        @foreach($payments as $key => $payment)
                                        <tbody>
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$payment->donation_due_id}}</td>
                                                <td>{{$payment->donation_due_title}}</td>
                                                <td>{{$payment->name}}</td>
                                                <td>{{$payment->transaction_id}}</td>
                                                <td>{{$payment->ref_id}}</td>
                                                <td>{{$payment->paid_at}}</td>
                                                <td>{{$payment->status}}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        @endif
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Membership ID</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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