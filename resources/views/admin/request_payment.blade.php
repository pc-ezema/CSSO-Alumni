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
                    <div class="col-md-12 m-b-30">
                        <!-- begin page title -->
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                            <div class="page-title mb-2 mb-sm-0">
                                <h1>Payment Request</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="/admin/dashboard"><i class="ti ti-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            Members
                                        </li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Payment Request</li>
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
                                    <h4 class="card-title">Payment Request</h4>
                                </div>
                                <div class="dropdown">
                                    <a data-toggle="modal" data-target="#add" class="btn btn-round btn-inverse-primary btn-xs" style="background: #264774 !important;">Create Payment Request</a>
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
                                    <div class="col-1">
                                        <div class="bg-type mt-1">
                                            <span>{{strtoupper(substr($donation_due->title, 0, 2))}}</span>
                                        </div>
                                    </div>
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
                                    <div class="col-2">
                                        <!-- <a data-toggle="modal" data-target="#view-{{$donation_due->id}}" class="mr-2"><i class="fa-fw fa fa-file-o" style="color: #264774 !important;" data-toggle="tooltip" data-placement="top" title="" data-original-title="View/Edit"></i></a> -->
                                        
                                        <div class="bg-type mt-1" style="background: #fff; border: 1px solid #264774;">
                                            <a data-toggle="modal" data-target="#delete-{{$donation_due->id}}"><i class="ti ti-trash" style="color: red;" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"></i></a>
                                        </div>
                                        <div class="modal fade" id="delete-{{$donation_due->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete {{$donation_due->title}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span style="color: #000;">Are you sure, you want to delete this member?</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('admin.delete.payment.request', Crypt::encrypt($donation_due->id)) }}" class="btn btn-success">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-right" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Payment Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{route('admin.add.payment.request')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea type="text" class="form-control" id="description" rows="6" name="description"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Request</button>
                                </form>
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