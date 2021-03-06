<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image;

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

   /* $images = Image::all();
    foreach($images as $image)
    {
       echo($image->user->name.' '.$image->user->surname. '<br/>');
       foreach($image->comments as $comment)
       {
           echo($comment->content);
       }
    }
    die();*/
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/config','\App\Http\Controllers\UserController@config')->name('config');
Route::get('/user/avatar/{filename}','\App\Http\Controllers\UserController@getImage')->name('user.avatar');
Route::post('/user/edit','\App\Http\Controllers\UserController@update')->name('user.edit');
