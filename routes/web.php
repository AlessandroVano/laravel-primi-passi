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
    return view('home', [
        'title' => 'Hello world',
    ]); // blade.php
});

 
Route::get('/Alessandro', function () {
    return view('about', [
        'title' => 'About'
    ]);
})->name('about'); 

