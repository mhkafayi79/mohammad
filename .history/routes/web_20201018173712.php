<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [homeController::class,'getposts']);
Route::get('/blog/{post}', [homeController::class,'getpost']);
Route::post('/blog/{post}', [homeController::class,'saveComment']);
Route::post('/blog', [homeController::class,'savePost']);
