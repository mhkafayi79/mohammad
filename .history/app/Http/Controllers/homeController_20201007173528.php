<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function getpost()
    {
        $posts = ['lorem ipsum 1'=>['comment 1', 'comment 2'],'lorem ipsum 2'];
        return view('welcome',['a' => $posts]);
    }
}
