<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('styles')
    </head>
    <body class="login">
        <div class="container">
            @yield('content')
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        @yield('scripts')
    </body>
</html>