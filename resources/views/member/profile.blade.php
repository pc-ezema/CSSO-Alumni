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
                                <h1>Profile</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="/member/dashboard"><i class="ti ti-home"></i></a>
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
                                    <div class="col-lg-3 pb-xl-0 pb-5 border-right">
                                        <div class="page-account-profil pt-5">
                                            <div class="profile-img text-center rounded-circle">
                                                <div class="pt-5">
                                                    <div class="bg-img m-auto">
                                                        @if(Auth::user()->avatar)
                                                        <img class="img-fluid border-primary" style="height: 100px;"src="/storage/avatars/{{Auth::user()->avatar}}" alt="Profile Picture">
                                                        @else
                                                        <img src="{{URL::asset('dash/assets/img/avtar/avatar.png')}}" class="img-fluid" alt="users-avatar">
                                                        @endif
                                                    </div>
                                                    <div class="profile pt-4">
                                                        <h4 class="mb-1">{{Auth::user()->first_name}} {{Auth::user()->surname}}</h4>
                                                        <p>{{Auth::user()->email}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-btn text-center mt-5 p-4">
                                                <form method="POST" action="{{ route('upload-avatar', Crypt::encrypt(Auth::user()->id)) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <input type="file" class="form-control" required name="avatar"/>
                                                        </div>
                                                    </div>
                                                    <div><button class="btn btn-primary" type="submit">Upload New Profile Picture</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 border-t border-right">
                                        <div class="page-account-form">
                                            <div class="form-titel border-bottom p-3">
                                                <h5 class="mb-0 py-2">Profile</h5>
                                            </div>
                                            <div class="p-4">
                                                <form method="POST" action="{{ route('profile.update', Crypt::encrypt(Auth::user()->id)) }}">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-6">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title" name="title" value="{{Auth::user()->title}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="surname">Surname</label>
                                                            <input type="text" class="form-control" id="surname" name="surname" value="{{Auth::user()->surname}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{Auth::user()->first_name}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="second_name">Second Name</label>
                                                            <input type="text" class="form-control" id="second_name" name="second_name" value="{{Auth::user()->second_name}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="phone_number">Phone Number</label>
                                                            <input type="number" class="form-control" id="phone_number" name="phone_number" value="{{Auth::user()->phone_number}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="whatsapp_number">Whatsapp Number</label>
                                                            <input type="number" class="form-control" id="whatsapp_number" name="whatsapp_number" value="{{Auth::user()->whatsapp_number}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="graduation_set_class">Graduation Set Class</label>
                                                            <input type="text" class="form-control" id="graduation_set_class" name="graduation_set_class" value="{{Auth::user()->graduation_set_class}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="state_of_origin">State of Origin</label>
                                                            <input type="text" class="form-control" id="state_of_origin" name="state_of_origin" value="{{Auth::user()->state_of_origin}}">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="occupation">Occupation</label>
                                                            <input type="text" class="form-control" id="occupation" name="occupation" value="{{Auth::user()->occupation}}">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 border-t border-right">
                                        <div class="page-account-form">
                                            <div class="form-titel border-bottom p-3">
                                                <h5 class="mb-0 py-2">Change Password</h5>
                                            </div>
                                            <div class="p-4">
                                                <form method="POST" action="{{ route('update.password', Crypt::encrypt(Auth::user()->id)) }}">
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