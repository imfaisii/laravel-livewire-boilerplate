<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template">

<head>
    @include('partials.app.styles')
    @include('partials.toastr')
    @livewireStyles
    @livewireScripts
    @powerGridStyles
    @powerGridScripts
    @stack('styles')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('partials.app.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('partials.app.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4 fw-bold"><span class="text-muted fw-light">Dashboard /</span>
                            {{ ucwords(last(request()->segments())) }}</h4>

                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('partials.app.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('partials.app.scripts')

    <!-- Vendor JS -->
    @stack('vendor-scripts')

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    @stack('page-scripts')

    <!-- Scripts -->
    @stack('scripts')

    <script>
        $(function() {
            window.addEventListener('toast', event => {
                event.detail.success ? toastr.success(event.detail.message) : toastr.error(event.detail
                    .message)
            })
        });
    </script>
</body>

</html>
