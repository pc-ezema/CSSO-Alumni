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
                            <h1>Personal Messages</h1>
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
                                    <li class="breadcrumb-item active text-primary" aria-current="page">View All Messages</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- begin row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-statistics mail-contant">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col border-md-t">
                                    <div class="mail-content  border-right border-n h-100">
                                        <div class="mail-msg scrollbar scroll_dark">
                                            @if($notifications->isEmpty())
                                            <div class="mail-msg-item">
                                                <a href="javascript:void(0)">
                                                    <div class="media align-items-center">
                                                        <div class="w-100">
                                                            <h5 class="mb-0 my-2">No notification</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @else
                                            @foreach($notifications as $notify)
                                            @if($notify->status == 'Read')
                                            <div class="mail-msg-item" style="background: #fff;">
                                                <div class="media align-items-center">
                                                    <div class="w-100">
                                                        <div class="mail-msg-item-titel justify-content-between">
                                                            <p class="text-dark">{{$notify->from}} - {{$notify->to}}</p>
                                                            <p class="d-block text-dark"><i class="nav-icon ti ti-eye "></i> {{$notify->seen}}</p>
                                                        </div>
                                                        <h5 class="mb-0 my-2">{{$notify->subject}}</h5>
                                                        <p>{{$notify->message}}</p>
                                                        <p class="">{{$notify->updated_at->toDayDateTimeString()}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="mail-msg-item">
                                                <a href="{{route('read.message', Crypt::encrypt($notify->id))}}">
                                                    <div class="media align-items-center">
                                                        <div class="w-100">
                                                            <div class="mail-msg-item-titel justify-content-between">
                                                                <p class="text-dark">{{$notify->from}} - {{$notify->to}}</p>
                                                                <p class="d-block text-dark"><i class="nav-icon ti ti-eye "></i> {{$notify->seen}}</p>
                                                            </div>
                                                            <h5 class="mb-0 my-2">{{$notify->subject}}</h5>
                                                            <p>{{$notify->message}}</p>
                                                            <p class="">{{$notify->updated_at->toDayDateTimeString()}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endif
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