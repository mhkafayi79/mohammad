<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    public function getposts()
    {
        Post::all();
        return view('welcome',);
    }
    public function getpost($id)
    {
        return $this->posts[$id];
    }
}
