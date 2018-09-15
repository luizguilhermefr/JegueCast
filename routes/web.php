<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('videos', 'VideosController', [
    'names' => [
        'index' => 'videos.index',
        'store' => 'videos.store',
        'create' => 'videos.create',
        'update' => 'videos.update',
        'show' => 'videos.show',
        'edit' => 'videos.edit',
    ],
]);
