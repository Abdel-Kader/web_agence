<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Accueil' }}</title>

        {{-- Styles --}}

        <!--font-awesome.min.css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome.min.css') }}">

        <!--linear icon css-->
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

        <!--chartist.min.css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('chartist.min.css') }}">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

        <!--Main style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

        <!--responsive.css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="wrapper">

            {{-- Top navbar --}}
            @include('layouts.partials._top-navbar')

            {{-- Left side navbar --}}
            @include('layouts.partials._side-navbar')
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">

                        {{-- Main content --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('layouts.partials._footer')
    </body>
</html>
