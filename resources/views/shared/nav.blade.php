<aside class="aside aside-fixed">
    <div class="aside-header">
        <a href="#" class="aside-logo">{{ config('app.name') }}<span>TMS</span></a>
        <a href="#" class="aside-menu-link">
            <i data-feather="menu"></i>
            <i data-feather="x"></i>
        </a>
    </div>
    <div class="aside-body">
        <div class="aside-loggedin">
            <div class="d-flex align-items-center justify-content-start">
                <a href="#" class="avatar"><img src="{{ asset('assets/img/img1.png') }}" class="rounded-circle" alt=""></a>
                <div class="aside-alert-link">
                    <a href="{{ route('logout') }}" data-bs-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
                </div>
            </div>
            <div class="aside-loggedin-user">
                <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-bs-toggle="collapse">
                    <h6 class="tx-semibold mg-b-0">{{ auth()->user()->name }}</h6>
                    <i data-feather="chevron-down"></i>
                </a>
                <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
            </div>
            <div class="collapse" id="loggedinMenu">
                <ul class="nav nav-aside mg-b-0">
                    <li class="nav-item"><a href="#" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
            <li class="nav-label">Dashboard</li>
            <li class="nav-item active"><a href="#" class="nav-link"><i data-feather="shopping-bag"></i> <span>Dashboard</span></a></li>
        </ul>
    </div>
</aside>
