<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>

<body class="antialiased">
    <ul>
        @foreach($posts as $post)
            <li>{{@post}}</li>
        @endforeach
    </ul>
</body>

</html>