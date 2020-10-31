<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $posts = ['lorem ipsum 1','lorem ipsum 2'];
        return view('welcome',[]);
    }
}
