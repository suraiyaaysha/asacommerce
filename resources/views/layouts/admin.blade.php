<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}


    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }} "/>

    @livewireStyles
</head>
<body>


    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.inc.admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.inc.admin.sidebar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->

                <!-- partial:partials/_footer.html -->
                @include('layouts.inc.admin.footer')

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
  <!-- container-scroller -->

    <!-- Scripts -->
    {{-- <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}

    <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }} "></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  {{-- <script src="vendors/chart.js/Chart.min.js"></script> --}}
  <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }} "></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }} "></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }} "></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }} "></script>
  <script src="{{ asset('admin/js/template.js') }} "></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard.js') }}"></script>
  <script src="{{ asset('admin/js/data-table.js') }} "></script>
  <script src="{{ asset('admin/js/jquery.dataTables.js') }} "></script>
  <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }} "></script>
  <!-- End custom js for this page-->

  {{-- <script src="js/jquery.cookie.js" type="text/javascript"></script> --}}

    @livewireScripts

    @stack('script')
</body>
</html>
