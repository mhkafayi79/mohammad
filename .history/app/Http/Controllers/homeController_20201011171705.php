<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    DB::select(, [1])
    private $posts = ['lorem ipsum 1'=>['comment 1', 'comment 2'],'lorem ipsum 2'=>['comment 1', 'comment 2']];
    public function getposts()
    {

        $posts = $this->posts;
        return view('welcome')->withPosts($posts);
    }
    public function getpost($id)
    {
        return $this->posts[$id];
    }
}
