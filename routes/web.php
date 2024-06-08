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

Route::get('mahasiswa/{nama}', function ($nama) {
    echo 'Nama: '.$nama;
});

Route::get('user/{name?}', function ($nama = 'TutorialsPoint') {
    return $name;
});

Route::get('user/profile', 'UserController@showProfile')-> function('profile');
