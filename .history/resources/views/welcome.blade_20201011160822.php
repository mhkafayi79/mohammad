<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
$post

<body class="antialiased">
        @foreach($posts as $key => $comments)

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $key }}
            </div>
            <div class="panel-footer">
                <ul>
                    @foreach($comments as $comment)

                    <li>{{$comment}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
</body>

</html>