<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Schol.io College Panel">
        <meta name="author" content="Coderthemes">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Schol.io College Admin Panel</title>

        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="/css/panel.css" rel="stylesheet">
        <link href="/panel/assets/css/icons.css" rel="stylesheet">

        @yield('styles')
        <script>
            window.Scholio = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
        </script>

        <script>
            window.Connection = {{ $connection->id }}
            window.SchoolTypeId = '{{ $connection->type->id }}'
            window.SchoolTypeName = '{{ $connection->type->name }}'
            window.AuthRole = '{{ auth()->user()->role }}'
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        @yield('scriptsBefore')
    </head>


    <body class="fixed-left">

        <div id="app">
            <!-- Begin page -->
            <div id="wrapper">
                <!-- Top Bar Start -->
                  @include('panel.partials.topbar.main')
                <!-- Top Bar End -->

                <!-- ========== Left Sidebar Start ========== -->
                  @include('panel.partials.navigation.main')
                <!-- Left Sidebar End -->

                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container">
                        @yield('content')

                        </div> <!-- container -->
                    </div> <!-- content -->

                    <!-- Footer -->
                    @include('panel.partials.footer.main')

                </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->

            </div>
            <!-- END wrapper -->

        </div>
        <script src="/panel/assets/js/modernizr.min.js"></script>
        <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
        <script src="/js/app.js"></script>


        <!-- jQuery  -->
        <script src="/js/bold.js"></script>
        <script src="/panel/assets/js/bootstrap-select.js"></script>

        <script>var resizefunc = [];</script>

        @yield('scripts')
    </body>
</html>