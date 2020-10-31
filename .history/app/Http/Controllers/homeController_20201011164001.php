<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    private $posts 
    public function getposts()
    {

        $posts = ['lorem ipsum 1'=>['comment 1', 'comment 2'],'lorem ipsum 2'=>['comment 1', 'comment 2']];
        return view('welcome')->withPosts($posts);
    }
    public function getpost($id)
    {
        return $id;
    }
}
