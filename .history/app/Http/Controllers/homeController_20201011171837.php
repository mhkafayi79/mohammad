<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 

class homeController extends Controller
{
    private $posts = ['lorem ipsum 1'=>['comment 1', 'comment 2'],'lorem ipsum 2'=>['comment 1', 'comment 2']];
    public function getposts()
    {
        $posts = DB::table('posts')->all();
        return $posts;
    }
    public function getpost($id)
    {
        return $this->posts[$id];
    }
}
