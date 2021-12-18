<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.app')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('partials.header')
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="/">SMPV</a></li>
                        <li>Atatutes</li>
                    </ol>
                </div>
                <section id="why-us" class="why-us">
                    <div class="container">
                        <div class="section-title">
                            <h2>Statutes</h2>
                        </div>
                        
                        <div class="row">
                            @foreach($statutes as $statute)
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <a href="/article/{!!@$statute['id']!!}">
                                    <div class="box">
                                        <span><i class="bx bx-receipt"></i></span>
                                        <h4>{!!@$statute['title']!!}</h4>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- End Breadcrumbs -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->
</body>

</html>