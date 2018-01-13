<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="login-page authentication">

@yield('content')
</body>

<script src="{{ asset('js/libscripts.bundle.js') }}"></script>
<script src="{{ asset('js/vendorscripts.bundle.js') }}"></script>
{{--<script src="{{ asset('js/morphingsearchscripts.bundle.js') }}"></script>--}}
<script src="{{ asset('js/mainscripts.bundle.js') }}"></script>
</body>
</html>