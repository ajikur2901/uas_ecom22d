<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/app-dark.css')}}">

    <link rel="shortcut icon" href="{{asset('images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.png')}}" type="image/png">
    @yield('custom_css')
</head>

<body>
    <div id="app">
        @include('admin_layouts.menu')
        <div id="main" class='layout-navbar'>
            @include('admin_layouts.header')
            <div id="main-content">
                @yield('content')

                @include('admin_layouts.footer')
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
      document.addEventListener(
        "DOMContentLoaded",
        function () {
          var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
          );
          var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
          });
        },
        false
      );
    </script>
    @yield('custom_js')

</body>

</html>