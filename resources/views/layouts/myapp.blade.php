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
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

@include('layouts.component.search')

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Swift University</a> </div>
        <ul class="nav navbar-nav navbar-right">
            @include('layouts.component.notify')

            @include('layouts.component.tasks')
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->

<!--Side menu and right menu -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        @include('layouts.component.userbar')
        {{--<!-- Menu -->--}}
        @include('layouts.component.menu')
        {{--<!-- #Menu -->--}}
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
        </ul>
        <div class="tab-content">
        @include('layouts.component.theme')
        @include('layouts.component.chat')
        @include('layouts.component.setting')
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            @yield('content')

        </div>
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js -->

<script src="{{ asset('js/libscripts.bundle.js') }}"></script>
<script src="{{ asset('js/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('js/morphingsearchscripts.bundle.js') }}"></script>
<script src="{{ asset('js/mainscripts.bundle.js') }}"></script>

<script src="{{ asset('js/datatablescriptsplusd.bundle.js') }}"></script>
</body>
</html>
