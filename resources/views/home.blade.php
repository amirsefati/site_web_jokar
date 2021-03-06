<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/jalali-moment/dist/jalali-moment.browser.js"></script>
    <script>
        moment.locale('fa');
    </script>
    <style>
    body{
        font-family:Vazir !important;
        direction: rtl;
        text-align: right;
        margin: 0;
    }
    </style>
</head>
<body>
    <div id="app">
        <dashboard></dashboard>
    </div>
</body>

</html>
