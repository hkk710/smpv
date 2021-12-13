<html>

<head>
    @include('partials.app')
</head>

<body style="background-color: #000000BF">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="background-color: #000">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">SMPV</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Insights</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/article">Articles</a></li>
                            <li><a href="/statutory">Statutory Updates</a></li>
                        </ul>
                    </li>
                    @if (Auth::check())
                    <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <div style="padding-top:3%">
        <embed src="https://sreerajm.blog/blog-2/" width="100%" height="100%">
    </div>
</body>

</html>