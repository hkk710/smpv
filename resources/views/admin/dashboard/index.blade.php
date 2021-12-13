@include('admin.layouts.app')
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        @include('admin.layouts.navbar')
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->.
        @include('admin.layouts.side_navbar')
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            {{-- <h1 class="heading">Welcome to Dashboard !</h1> --}}
            @include('admin.dashboard.main')
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        @include('admin.layouts.footer')

    </div>
    <!-- END WRAPPER -->
</body>