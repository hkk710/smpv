<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.app')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('partials.header')
    <!-- End Header -->

    <!-- ======= Banner Section ======= -->
    @include('partials.banner')
    <!-- End Banner -->

    <!-- Modal -->
    @include('partials.modelpopup')
    <!-- end modal--->

    <main id="main">
        <!-- ======= About Section ======= -->
        @include('partials.aboutus.index')
        <!-- End About Section -->
        <!-- ======= Clients Section ======= -->
        @include('partials.clients.index')
        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        @include('partials.services.index')
        <!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        @include('partials.team.index')
        <!-- End Team Section -->

        {{-- insights section --}}
        @include('partials.insights.index')
        {{-- End insights Responsiblity --}}

        {{-- Social responsiblity section --}}
        @include('partials.social.index')
        {{-- End Social Responsiblity --}}

        {{-- Career section --}}
        @include('partials.career.index')
        {{-- End Career --}}

        <!-- ======= Contact Section ======= -->
        @include('partials.contact.index')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->


    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="themes/public/js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('#ModalLong').modal({
                backdrop: 'static',
                keyboard: false
            })
            $('#ModalLong').modal('show')
            $('#popupclose').click(function () {     
                $('#ModalLong').modal('hide')
            });
        });
    </script>

</body>

</html>