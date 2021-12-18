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
                <section id="why-us" class="why-us">
                    <div class="container">
                        <div class="section-title">
                            <h2>{!!@$content['title']!!}</h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="articleouter col-md-8">
                                    <p>{!!@$content['content'] !!}</p>
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

