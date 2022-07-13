<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{URL::asset('assets/images/CSSO-logo.png')}}">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <!--Scroll In Animation-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montagu+Slab:opsz,wght@16..144,100;16..144,200;16..144,300;16..144,400;16..144,500;16..144,600;16..144,700&display=swap" rel="stylesheet">
        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function(){
                    $(this).remove(); 
                });
            }, 2500);
        </script>
    </head>
    <body>
        <!-- header -->
        @includeIf('layouts.frontend_header')
        <!-- End header -->

        <!-- Page-Content -->
        @yield('page-content')
        <!-- End Page-Content -->

        <!-- footer -->
        @includeIf('layouts.frontend_footer')
        <!-- End footer -->

        <!--Scroll In Animation-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
    </body>
</html>