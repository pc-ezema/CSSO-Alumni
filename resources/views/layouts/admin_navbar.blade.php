<!-- begin app-nabar -->
<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light" style="background: #e5e5e5 !important;">
        <ul class="metismenu " id="sidebarNav">
            <li>
                <a href="/admin/dashboard" aria-expanded="false">
                    <i class="nav-icon ti ti-menu"></i>
                    <span class="nav-title">
                        Dashboard
                    </span>
                </a> 
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="nav-icon ti ti-user"></i>
                    <span class="nav-title">
                        Member
                    </span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('admin.members')}}">
                            Add a member
                        </a> 
                    </li>
                    <li>
                        <a href="{{route('admin.view.members')}}">
                            View all members
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.view.membership.requests')}}" aria-expanded="false"> <i class="nav-icon ti ti-layout "></i> <span class="nav-title">Membership Requests</span> </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="nav-icon fe fe-mail"></i>
                    <span class="nav-title">
                        Messages
                    </span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('admin.create.general.message')}}">
                            Create General Message/notification
                        </a> 
                    </li>
                    <li>
                        <a href="{{route('admin.view.messages')}}">
                            View Messages/Notifications
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)"  aria-expanded="false">
                    <i class="nav-icon ti ti-briefcase "></i>
                    <span class="nav-title">
                        Payment
                    </span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('admin.payment.request')}}">
                            Create payment request
                        </a> 
                    </li>
                    <li>
                        <a href="{{route('admin.view.payments')}}">
                            View all payments from members
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-static-title">Settings</li>
            <li>
                <a href="{{route('admin.profile')}}" aria-expanded="false"> <i class="nav-icon ti ti-settings "></i> <span class="nav-title">Profile</span> </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i><span class="nav-title">Log Out</span> 
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
<!-- end app-navbar -->