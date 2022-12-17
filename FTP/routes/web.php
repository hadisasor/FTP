<?php

use Illuminate\Support\Facades\Route;


//welcome page
Route::view('/', 'welcome');

//hajj page
 Route::view('/hajj', 'hajj');


//umrah page
 Route::view('/umrah', 'umrah');



//travel page
 Route::view('/travel', 'travel');



//payment
 Route::view('/payment', 'payment');


//about page
 Route::view('/about', 'about');

//register page
 Route::view('/register', 'register');


//login page
 Route::view('/login', 'login');


