<header id="header" class=" d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/">SMPV</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                {{-- <li><a class="nav-link scrollto" href="#faq">Associates</a></li> --}}
                <li class="dropdown"><a href="#insights"><span>Insights</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/article">Articles</a></li>
                        <li><a href="/statutory">Statutory Updates</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#social">Social</a></li>
                <li><a class="nav-link scrollto" href="#career">Career</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                @if (Auth::check())
                <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
                {{-- @else
                <li><a class="getstarted scrollto" href="/login">Log in</a></li>
                <li><a class="getstarted scrollto" href="/register">Register</a></li> --}}
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>