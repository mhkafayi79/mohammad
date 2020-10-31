<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
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
    public function saveComment(Request $request, Post $post)
    {
        // return Post::where('title',$title)->get();
        // return Post::find($id);
        // return view('singlePost',compact('post'));
        // $post->Comments()->create($request->all());
        $comment = new Comment($request->all());
        $post->Comments()->save($comment);
        // return redirect('/blog/'.$post->id);
        // return redirect()->to('/blog/'.$post->id);
        // return redirect()->route('post-view',['post'=>$post->id]);
        return redirect()->back();
    }
    public function savePost(Request $request)
    {
        // $post = new Post();
        // $post->title = $request->get('title');
        // $post->content = $request->get('content');
        // $post->save();
        // $post = new Post($request->all());
        // $post->save();
        Post::create($request->all());
        // return Post::where('title',$title)->get();
        // return Post::find($id);
        return true;
    }
}
