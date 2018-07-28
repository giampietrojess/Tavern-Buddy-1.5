<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tavern Buddy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="/img/d20favicon.png">
    <!-- Styles -->
    <link href="{{ asset('css\app.css') }}" rel="stylesheet">
    <link href="{{ asset('\sass\app.scss') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.Navbar')
            @include('inc.messages')
            @yield('content')
            
    
    </div>
</body>
</html>
