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
                                <h1>Profile</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="/admin/dashboard"><i class="ti ti-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            Profile
                                        </li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <!-- begin row -->
                <div class="row account-contant">
                    <div class="col-12">
                        <div class="card card-statistics">
                            <div class="card-body p-0">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 pb-xl-0 pb-5 border-right">
                                        <div class="page-account-profil pt-5">
                                            <div class="profile-img text-center rounded-circle">
                                                <div class="pt-5">
                                                    <div class="bg-img m-auto">
                                                        <img src="{{URL::asset('dash/assets/img/avtar/avatar.jpg')}}" class="img-fluid" alt="users-avatar">
                                                    </div>
                                                    <div class="profile pt-4">
                                                        <h4 class="mb-1">{{Auth::user()->first_name}} {{Auth::user()->second_name}}</h4>
                                                        <p>{{Auth::user()->email}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 border-t border-right">
                                        <div class="page-account-form">
                                            <div class="form-titel border-bottom p-3">
                                                <h5 class="mb-0 py-2">Change Password</h5>
                                            </div>
                                            <div class="p-4">
                                                <form method="POST" action="{{ route('admin.update.password', Crypt::encrypt(Auth::user()->id)) }}">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="old-pass">Old Password</label>
                                                            <input type="password" class="form-control" id="old-pass" value="{{Auth::user()->password}}" readonly>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="pass">New Password</label>
                                                            <input type="password" class="form-control" id="pass" name="new_password">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="cn-pass">Comfirm-New Password</label>
                                                            <input type="password" class="form-control" id="cn-pass" name="new_password_confirmation">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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