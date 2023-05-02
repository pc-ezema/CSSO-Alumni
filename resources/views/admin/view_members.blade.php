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
                                <h1>View All Members</h1>
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
                                        <li class="breadcrumb-item active text-primary" aria-current="page">View All Members</li>
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
                                                <th>Membership ID</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Date Joined</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @if($members->isEmpty())
                                        <tbody>
                                            <tr>
                                                <td class="align-enter text-dark font-15" colspan="6">No Member.</td>
                                            </tr>
                                        </tbody>
                                        @else
                                        @foreach($members as $key => $member)
                                        <tbody>
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$member->membership_id}}</td>
                                                <td>{{$member->title}} {{$member->surname}}, {{$member->first_name}} {{$member->second_name}}</td>
                                                <td>{{$member->phone_number}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>Password</td>
                                                <td>{{$member->created_at}}</td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#change-password-{{$member->id}}" class="mr-2"><i class="fa fa-key" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="change-password-{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-right" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Change {{$member->membership_id}} Password</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{ route('admin.change.member.password', Crypt::encrypt($member->id)) }}">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="subject">New Password</label>
                                                                            <input type="password" class="form-control" id="subject" name="new_password">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="subject">Confirm New Password</label>
                                                                            <input type="password" class="form-control" id="subject" name="new_password_confirmation">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a data-toggle="modal" data-target="#send-message-{{$member->id}}" class="mr-2"><i class="fa fa-paper-plane-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Message"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="send-message-{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-right" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Send message to {{$member->membership_id}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{ route('admin.message.member', Crypt::encrypt($member->id)) }}">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="subject">Subject</label>
                                                                            <input type="text" class="form-control" id="subject" name="subject">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message">Message</label>
                                                                            <textarea type="text" class="form-control" id="message" rows="5" name="message"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a data-toggle="modal" data-target="#view-member-{{$member->id}}" class="mr-2"><i class="fa-fw fa fa-file-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="View/Edit"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="view-member-{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-right" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit {{$member->membership_id}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{ route('admin.update.member', Crypt::encrypt($member->id)) }}">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="title">Title</label>
                                                                            <input type="text" class="form-control" id="title" name="title" value="{{$member->title}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="surname">Surname</label>
                                                                            <input type="text" class="form-control" id="surname" name="surname" value="{{$member->surname}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="first_name">First Name</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$member->first_name}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="second_name">Second Name</label>
                                                                            <input type="text" class="form-control" id="second_name" name="second_name" value="{{$member->second_name}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="phone_number">Phone Number</label>
                                                                            <input type="number" class="form-control" id="phone_number" name="phone_number" value="{{$member->phone_number}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="whatsapp_number">Whatsapp Number</label>
                                                                            <input type="number" class="form-control" id="whatsapp_number" name="whatsapp_number" value="{{$member->whatsapp_number}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control" id="email" name="email" value="{{$member->email}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="graduation_set_class">Graduation Set Class</label>
                                                                            <input type="text" class="form-control" id="graduation_set_class" name="graduation_set_class" value="{{$member->graduation_set_class}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="state_of_origin">State of Origin</label>
                                                                            <input type="text" class="form-control" id="state_of_origin" name="state_of_origin" value="{{$member->state_of_origin}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="occupation">Occupation</label>
                                                                            <input type="text" class="form-control" id="occupation" name="occupation" value="{{$member->occupation}}">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal -->
                                                    <a data-toggle="modal" data-target="#delete-member-{{$member->id}}"><i class="ti ti-trash" style="color: red;"data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"></i></a>
                                                    <div class="modal fade" id="delete-member-{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete {{$member->membership_id}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure, you want to delete this member?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <a href="{{route('admin.delete.member', Crypt::encrypt($member->id))}}" class="btn btn-success">Delete</a>
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