<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>

<body class="antialiased">
    <ul>
        @foreach($posts as $key => $post)
            <li>{{$key}}</li>
        @endforeach
    </ul>
</body>

</html>