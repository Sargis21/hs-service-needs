<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="{{ asset('custom/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('custom/fontawesome/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('custom/css/templatemo-diagoona.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('custom/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('custom/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('custom/js/jquery.backstretch.min.js')}}"></script>
    <script src="{{asset('custom/js/templatemo-script.js')}}"></script>
</body>
</html>
