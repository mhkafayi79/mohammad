<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    public function getposts()
    {
        $posts = Post::all();
        return view('welcome',compact('posts'));
    }
    public function getpost(Post $post)
    {
        // return Post::where('title',$title)->get();
        // return Post::find($id);

        return view('singlePost',compact('post'));
    }
    public function saveComment(Post $post)
    {
        // return Post::where('title',$title)->get();
        // return Post::find($id);
        return view('singlePost',compact('post'));
    }
    public function savePost(Request $request)
    {
        // $post = new Post();
        // $post->title = $request->get('title');
        // $post->content = $request->get('content');
        // $post->save();
        $post = new Post()
        // return Post::where('title',$title)->get();
        // return Post::find($id);
        return $post;
    }
}
