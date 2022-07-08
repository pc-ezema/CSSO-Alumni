<!-- begin app-header -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">

        <!-- begin navbar-header -->
        <div class="navbar-header d-flex align-items-center">
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            <a class="navbar-brand" href="/">
                <img src="{{URL::asset('assets/images/CSSO-logo.png')}}" draggable="false" class="img-fluid logo-desktop" alt="logo" />
                <img src="{{URL::asset('assets/images/CSSO-logo..png')}}" draggable="false" class="img-fluid logo-mobile" alt="logo" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
        </button>
        <!-- end navbar-header -->
        <!-- begin navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                            <i class="ti ti-align-right"></i>
                        </a>
                    </li>
                    <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                         <a href="javascript:void(0)" class="nav-link expand">
                             <i class="icon-size-fullscreen"></i>
                         </a>
                     </li>
                </ul>
                <ul class="navbar-nav nav-right ml-auto">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown user-profile">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->avatar)
                            <img src="/storage/avatars/{{Auth::user()->avatar}}" class="border-primary" alt="Profile Picture">
                            @else
                            <img src="{{URL::asset('dash/assets/img/avtar/avatar.png')}}" alt="users-avatar">
                            @endif
                            <span class="bg-success user-status"></span>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="bg-gradient px-4 py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-1">
                                        <h4 class="text-white mb-0">{{Auth::user()->first_name}} {{Auth::user()->second_name}}</h4>
                                        <small class="text-white">{{Auth::user()->email}}</small>
                                    </div>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                    class="zmdi zmdi-power"></i></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="p-4">
                                <a class="dropdown-item d-flex nav-link" href="{{route('admin.profile')}}">
                                    <i class=" ti ti-settings pr-2 text-info"></i> Profile
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>
<!-- end app-header -->