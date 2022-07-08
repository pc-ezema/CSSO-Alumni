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
                                <h1>View All Membership Request</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="/admin/dashboard"><i class="ti ti-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            Membership
                                        </li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">View All</li>
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
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Whatsapp Number</th>
                                                <th>Email</th>
                                                <th>Graduation Set Class</th>
                                                <th>State of Origin</th>
                                                <th>Occupation</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @if($membership_requests->isEmpty())
                                        <tbody>
                                            <tr>
                                                <td class="align-enter text-dark font-15" colspan="10">No Membership Request.</td>
                                            </tr>
                                        </tbody>
                                        @else
                                        @foreach($membership_requests as $key => $membership_request)
                                        <tbody>
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$membership_request->title}} {{$membership_request->surname}}, {{$membership_request->first_name}} {{$membership_request->second_name}}</td>
                                                <td>{{$membership_request->phone_number}}</td>
                                                <td>{{$membership_request->whatsapp_number}}</td>
                                                <td>{{$membership_request->email}}</td>
                                                <td>{{$membership_request->graduation_set_class}}</td>
                                                <td>{{$membership_request->state_of_origin}}</td>
                                                <td>{{$membership_request->occupation}}
                                                <td>{{$membership_request->created_at}}</td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#confirm-membership-{{$membership_request->id}}"><i class="ti ti-new-window" data-toggle="tooltip" data-placement="top" title="Confirm Membership" data-original-title="Confirm Membership"></i></a>
                                                    <div class="modal fade" id="confirm-membership-{{$membership_request->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Confirm Membership</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Undergoing this action, you have hereby confirmed 
                                                                    <br><b>{{$membership_request->title}} {{$membership_request->surname}}, {{$membership_request->first_name}} {{$membership_request->second_name}}</b>
                                                                    <br> as a member of C.S.S.O OBOSI ALUMNI ASSOCIATION
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <form method="POST" action="{{route('admin.confirm.member', Crypt::encrypt($membership_request->id))}}">
                                                                        @csrf
                                                                        <button href="" class="btn btn-success">Confirm</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a data-toggle="modal" data-target="#decline-membership-{{$membership_request->id}}"><i class="ti ti-trash" style="color: red;"data-toggle="tooltip" data-placement="top" title="Deline" data-original-title="Decline"></i></a>
                                                    <div class="modal fade" id="decline-membership-{{$membership_request->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Decline Membership Request</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure, you want to decline this membership request?

                                                                    <br>Note: The data will be deleted from the database.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <a href="{{route('admin.decline.member', Crypt::encrypt($membership_request->id))}}" class="btn btn-success">Decline</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                <th>Password</th>
                                                <th>Date Joined</th>
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