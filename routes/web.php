<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\taskController;
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
Auth::loginUsingId(1);

Route::get('/', [homeController::class,'getposts'])->middleware('adminAccess');
Route::group(['prefix' => 'blog'], function () {
    Route::get('{post?}', [homeController::class,'getpost'])->name('post-view');
Route::post('{post}', [homeController::class,'saveComment']);
Route::post('', [homeController::class,'savePost']);
});
Route::resource('task', taskController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
