<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div class="container">

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $post->title }}
            </div>
            <div class="panel-footer">
                <ul class="list-group">
                    @foreach($post->Comments as $coment)
                    <li class="list-group-item">{{$coment->content}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <form action="{{ $post->id }}" method="post">
        <textarea name="content" cols="30" rows="10"></textarea>
        @@csrf
            <button type="submit">save</button>
    </form>
    </div>
</body>

</html>