@extends('layouts.siteLayout')

@section('container')
@if ($errors)
@foreach ($errors->all() as $error)    
<div class="alert alert-danger">
    {{ $error }}
</div>
@endforeach

@endif
@if($posts->count()>0)
@foreach($posts as $key => $post)
<div class="col col-lg-3">
    <div class="panel panel-default ">
        <div class="panel-body">
        <a href="{{ route('post-view',['post'=>$post->id]) }}">
            {{ $post->title }}
        </a>
        </div>
    </div>
</div>
@endforeach
@else
<p>Post Not Exist</p>
@endif
<form action="/blog" method="post">
    @csrf
    <input type="text" name="title">
    <textarea name="content" cols="30" rows="10"></textarea>
    <button type="submit">save post</button>
</form>

@endsection()
@section('container2')
    hi
@endsection