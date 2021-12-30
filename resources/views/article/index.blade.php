<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.app')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
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
                        <li>Articles</li>
                    </ol>
                </div>
                <section id="why-us" class="why-us">
                    <div class="container">
                        <div class="section-title">
                            <h2>Articles</h2>
                        </div>
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td> <a href="/article/{!!@$article['id']!!}" style="color:#000">
                                        <span><i class="bx bx-receipt"></i></span>
                                        {!!@$article['title']!!}
                                        </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>