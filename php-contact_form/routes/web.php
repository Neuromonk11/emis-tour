<?php

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

Route::get('/', 'App\Http\Controllers\ArticleController@allContacts');


Route::post('/create', 'App\Http\Controllers\ArticleController@post')->name('post');

Route::get('/{title}', function ($title) {
    return view('welcome', ['text' => $title]);
})->name('firstTask');

