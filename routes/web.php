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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile', ['middleware'=>'auth', 'uses'=>'ProfileController@index'])->name('profile.index');
Route::get('/profile/{username}', 'ProfileController@show')->name('profile.show');
Route::get('/p/create', ['middleware'=>'auth', 'uses'=>'PostsController@create'])->name('post.create');
Route::post('/p', ['middleware'=>'auth', 'uses'=>'PostsController@store'])->name('post.store');
Route::get('/p/{post}', 'PostsController@show')->name('post.show');

