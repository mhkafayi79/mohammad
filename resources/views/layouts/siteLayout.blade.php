<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/app.css">
</head>

<body class="antialiased">
    <div class="container">
        @yield('container')
    </div>
</body>

</html>