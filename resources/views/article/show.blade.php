<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.appinner')
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
                        <li><a href="/article">Articles</a></li>
                        <li>{!!@$article['title']!!}</li>
                    </ol>
                </div>
                <section id="why-us" class="why-us">
                    <div class="container">
                        <div class="section-title">
                            <h2>{!!@$article['title']!!}</h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="articleouter col-md-8">
                                    <p>{!!@$article['content'] !!}</p>
                                </div>
                            </div>
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

