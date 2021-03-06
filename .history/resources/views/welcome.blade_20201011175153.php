<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div class="container">
    @if($posts->count()>0)
        @foreach($posts as $key => $post)
        <div class="col col-lg-3">
            <div class="panel panel-default ">
                <div class="panel-body">
                    {{ $post->title }}
                </div>
            </div>
        </div>
        @endforeach
        @else
        <p>Post Not Exist</p>
    </div>
</body>

</html>