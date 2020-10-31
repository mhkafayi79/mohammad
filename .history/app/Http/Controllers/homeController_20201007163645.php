<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $posts = ['']
        return view('welcome',[]);
    }
}
