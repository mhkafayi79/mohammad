<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>
$post
<body class="antialiased">
    <ul>
        @foreach($posts as $key => $post)
            <li>{{$key}}
                @foreach($post as $comment)
                <ul>
                <li></li>
                </ul>@endforeach
            </li>

        @endforeach
    </ul>
</body>

</html>