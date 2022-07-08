<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li>
                <a href="/member/dashboard" aria-expanded="false">
                    <i class="nav-icon ti ti-menu"></i>
                    <span class="nav-title">
                        Dashboard
                    </span>
                </a> 
            </li>
            <li>
                <a href="{{route('donations.dues')}}" aria-expanded="false">
                <i class="nav-icon ti ti-receipt"></i>
                    <span class="nav-title">
                        Donation / Dues
                    </span>
                </a> 
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fe fe-mail"></i><span class="nav-title">Messages/Notifications</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('view.general.messages_notifications') }}">General</a> </li>
                    <li> <a href="{{ route('view.personal.messages_notifications') }}">Personal</a> </li>
                </ul>
            </li>
            <li>
                <a href="{{route('payment.history')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-wallet"></i>
                    <span class="nav-title">
                        Payment History
                    </span>
                </a> 
            </li>
            <li class="nav-static-title">Settings</li>
            <li>
                <a href="{{route('profile')}}" aria-expanded="false"> <i class="nav-icon ti ti-settings "></i> <span class="nav-title">Profile</span> </a>
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