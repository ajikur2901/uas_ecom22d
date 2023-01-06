<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Horizontal - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/main/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png')}}" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/shared/iconly.css')}}">
    @yield('custom_css')
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/pages/horizontal-layout.js')}}"></script>
    @yield('custom_js')
</body>

</html>