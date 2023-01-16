<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('insert');
});
Route::view('postadd/{id}','postadd');

Route::controller(AuthorController::class)->group(function(){
    Route::post('addAuthor','addAuthor');
    Route::get('showrecord','showall');
    Route::get('showauthor/{id}','showAuthor');
});
Route::controller(PostController::class)->group(function(){
    Route::get('addPost','addPost');
    Route::get('showpost/{id}','showPost');
});
