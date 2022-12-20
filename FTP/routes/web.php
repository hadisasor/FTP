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
    return view('home');
});
Route::get('/hajj', function () {
    return view('hajj');
});
Route::get('/umrah', function () {
    return view('umrah');
});
Route::get('/travel', function () {
    return view('travel');
});
 