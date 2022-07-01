<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img src="{{URL::asset('assets/images/CSSO A.png')}}" draggable="false" alt="ALumin">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" ></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/leadership" class="nav-link">Leadership</a>
                </li>
                <li class="nav-item">
                    <a href="/members" class="nav-link">Become A Member</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">Contact Us</a>
                </li>
            </ul>
            @auth
                @if(Auth::user()->user_type == "Administrator")
                    <div class="d-flex">    
                        <a href="/admin/dashboard" class="signin">Dashboard</a>
                    </div>
                @else
                    <div class="d-flex">    
                        <a href="/member/dashboard" class="signin">Dashboard</a>
                    </div>
                @endif
            @else
                <div class="d-flex">    
                    <a href="/login" class="signin">Membership Login</a>
                </div>
            @endauth
        </div>
    </nav>
</header>