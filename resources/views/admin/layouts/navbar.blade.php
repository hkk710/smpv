<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        {{-- <a href="{{ route('dashboard') }}""><img src="themes/admin/img/recap.PNG" alt="recap Logo"
            class="img-responsive logo"></a> --}}
        <a href="{{ route('dashboard') }}">
            <h1>SMPV</h1>
        </a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            {{-- <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div> --}}
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                {{-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="lnr lnr-alarm"></i>
                        <span class="badge bg-danger">5</span>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is
                                almost full</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9
                                unfinished tasks</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is
                                available</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in
                                1 hour</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has
                                been approved</a></li>
                        <li><a href="#" class="more">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i>
                        <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Basic Use</a></li>
                        <li><a href="#">Working With Data</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Troubleshooting</a></li>
                    </ul>
                </li> --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                            src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="Avatar">
                        <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="{{ route('dashboard') }}"><i class="lnr lnr-envelope"></i>
                                <span>{{ __('Dashboard') }}</span></a>
                        </li>
                        <li><a href="{{ route('admin.profile.show') }}"><i
                                    class="lnr lnr-user"></i><span>{{ __('Profile') }}</span></a>
                        </li>
                        <li>
                            <form class="logout" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="lnr lnr-exit"></i>
                                    <span>{{ __('Log Out') }}</span></a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>