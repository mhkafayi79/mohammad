<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    private $posts 
    public function getposts()
    {

        $posts = ;
        return view('welcome')->withPosts($posts);
    }
    public function getpost($id)
    {
        return $id;
    }
}
