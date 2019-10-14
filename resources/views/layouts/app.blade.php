<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teamgeist') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/6a2aa0cafc.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

@if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')

<body class="register-page">
    <div id="app">
        @yield('auth')
    </div>
</body>

@else

<body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">

        @include('layouts.includes.header')

        @include('layouts.includes.sidebar.sidebar')


        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.includes.footer')

    </div>
    <!-- ./wrapper -->
</body>

@endif



</html>
