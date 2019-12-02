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

// root
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Gugi Imamudin';
    return view('about', ['nama' => $nama]);
});
