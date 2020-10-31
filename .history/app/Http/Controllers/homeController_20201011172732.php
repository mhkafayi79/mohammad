<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    public function getposts()
    {
        $posts = DB::table('posts')->where('id',2)->get();
        return $posts;
    }
    public function getpost($id)
    {
        return $this->posts[$id];
    }
}
