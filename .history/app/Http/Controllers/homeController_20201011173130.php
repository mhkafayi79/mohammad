<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    public function getposts()
    {
        return $posts;
    }
    public function getpost($id)
    {
        return $this->posts[$id];
    }
}
