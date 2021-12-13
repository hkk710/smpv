<div class="main-content">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        {{-- @include('admin.dashboard.partials.overview') --}}
        <!-- END OVERVIEW -->
        <div class="row">
            <div class="col-md-6">
                <!-- RECENT  -->
                @include('admin.dashboard.partials.aboutus')
                <!-- END RECENT -->
            </div>
            <div class="col-md-6">
                <!-- MULTI CHARTS -->
                {{-- @include('admin.dashboard.partials.multichart') --}}
                <!-- END MULTI CHARTS -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <!-- TODO LIST -->
                {{-- @include('admin.dashboard.partials.todolost') --}}
                <!-- END TODO LIST -->
            </div>
            <div class="col-md-5">
                <!-- TIMELINE -->
                {{-- @include('admin.dashboard.partials.timeline') --}}
                <!-- END TIMELINE -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- TASKS -->
                {{-- @include('admin.dashboard.partials.tasks') --}}
                <!-- END TASKS -->
            </div>
            <div class="col-md-4">
                <!-- VISIT CHART -->
                {{-- @include('admin.dashboard.partials.visitchart') --}}
                <!-- END VISIT CHART -->
            </div>
            <div class="col-md-4">
                <!-- REALTIME CHART -->
                {{-- @include('admin.dashboard.partials.realtimechart') --}}
                <!-- END REALTIME CHART -->
            </div>
        </div>
    </div>
</div>