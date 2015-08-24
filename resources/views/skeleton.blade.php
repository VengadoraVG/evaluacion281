<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap.min.css" type="text/css" media="screen" />
        @yield('styles')
    </head>
    
    <body>

        @yield('content')

        <script src="jquery-1.11.3.min.js"></script>
        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        @yield('scripts')
    </body>
</html>
