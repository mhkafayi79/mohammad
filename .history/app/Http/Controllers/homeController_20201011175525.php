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
    public function getpost($id)
    {
        // return Post::where('title',$title)->get();
        return Post::find($id);
    }
}
