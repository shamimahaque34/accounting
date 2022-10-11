<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                <form class="p-3">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                </form>
            </div>
        </li>
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('/') }}backend/assets/images/flags/{{ Session::has('lan-flag') ? Session::get('lan-flag') : 'us.jpg' }}" alt="user-image" class="me-0 me-sm-1" height="12">
                <span class="align-middle d-none d-sm-inline-block">{{ Session::has('lan-flag') ? Session::get('lan-title') : 'English' }}</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                <!-- item-->
                <a href="?change-language=en" class="dropdown-item notify-item">
                    <img src="{{ asset('/') }}backend/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                </a>

                <!-- item-->
                <a href="?change-language=bn" class="dropdown-item notify-item">
                    <img src="{{ asset('/') }}backend/assets/images/flags/bd.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Bangla</span>
                </a>

            </div>
        </li>

       

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
               aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{ asset('/') }}backend/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                <span>
                                        <span class="account-user-name">{{Auth::user()->name}}</span>
                                        <span class="account-position">Founder</span>
                                    </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

              
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="document.getElementById('logoutForm').submit();">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
  
</div>
