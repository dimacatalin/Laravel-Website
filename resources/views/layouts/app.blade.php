<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ URL::asset('/css/favicon.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Riftul Invocatorului') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
</head>
<body>
    @include('inc.navbar')
            
    <div id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container">
    
                @include('inc.messages')
                @yield('content')
    
            </div>
        </div>
        
    </div>
                     
    
</body>
</html>
