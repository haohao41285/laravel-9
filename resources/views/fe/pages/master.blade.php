<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>TMS | @yield('title')</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <!-- MAIN CSS -->
    @include('fe.lib._css')
    <!-- END MAIN CSS -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

    @stack('css')

</head>

<body>
    <!-- HEADER -->
    @include('fe.partials._header')
    <!-- // HEADER -->
    @yield('content')

    <!-- FOOTER -->
    @include('fe.partials._footer')
    <!--// FOOTER -->
	@include('fe.partials._popup')
    <!-- MAIN JS -->
    @include('fe.lib._js')
    <!-- // MAIN JS -->
</body>

@stack('js')

</html>
