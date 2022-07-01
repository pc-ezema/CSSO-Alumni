<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{config('app.name')}} - Admin Dashboard</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Alumin Dashboard Admin" />
        <meta name="author" content="Potenza Global Solutions" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- fontawesome Icon -->
        <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
        <!-- bootstrap-icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- app favicon -->
        <link rel="shortcut icon" href="assets/img/image 1.png">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <!-- plugin stylesheets -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('dash/assets/css/vendors.css')}}" />
        <!-- app style -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('dash/assets/css/style.css')}}" />4
        <!-- chart -->
        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function(){
                    $(this).remove(); 
                });
            }, 2500);
        </script>        
    </head>
    <body>
        <!-- begin app -->
        <div class="app">
            <!-- begin app-wrap -->
            <div class="app-wrap">
                <!-- header -->
                @includeIf('layouts.admin_header')
                <!-- End header -->

                <!-- Sidebar -->
                @yield('navbar')
                <!-- End Sidebar -->

                <!-- Page-Content -->
                @yield('page-content')
                <!-- End Page-Content -->

                <!-- begin footer -->
                <footer class="footer">
                    <div class="row">
                        <div class="col-12 col-sm-12 text-center">
                            <p class="text-dark">&copy; Copyright {{ date('Y') }}, {{config('app.name')}}. All rights reserved.</p>
                        </div>
                    </div>
                </footer>
                <!-- end footer -->
                <!-- Alerts  Start-->
                <div style="position: fixed; top: 6px; right: 10px; z-index: 100000; width: auto;">
                    @include('layouts.alert')
                </div>
                <!-- Alerts End -->
            </div>
            <!-- end app-wrap -->
        </div>
        <!-- end app -->

        <!-- plugins -->
        <script src="{{URL::asset('dash/assets/js/vendors.js')}}"></script>

        <!-- custom app -->
        <script src="{{URL::asset('dash/assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </body>
</html>