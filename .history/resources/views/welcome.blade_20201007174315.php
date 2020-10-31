<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>
$post
<body class="antialiased">
    <ul>
        @foreach($posts as $key => $post)
            <li>{{$key}}
                <ul>
                @foreach($post as $comment)

                <li>{{$comment}}</li>
                @endforeach

                </ul>
            </li>

        @endforeach
    </ul>
</body>

</html>