<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body class="antialiased">
    <?ph
        @foreach($posts)
        @endforeach
    </body>
</html>
