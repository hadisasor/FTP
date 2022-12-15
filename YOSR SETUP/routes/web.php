<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hajjpackage;
use App\Models\Umrahpackage;
use App\Http\Controllers\Crud;
use App\Http\Controllers\RegController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LogOut;

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

// hajj package path which include within it the children file also all hajjpackages pages model to include hajj pages-------
Route::get('/', function () {
    return view('includes/Children',[
        'hajjpackages' => Hajjpackage::all()
    ],['umrahpackages' => Umrahpackage::all()]);
})->name('Home');

// login page path  ---------------------------------------------
Route::get('/login',function(){
    return view('registration.login');
})->name('login');

// signup page path ---------------------------------------------
Route::get('/signup',function(){
    return view('registration.signup');
})->name('signup');


//hajj packages page path ---------------------------------------------
//mentioning all hajjpackages pages and including hajj package model 
Route::get('/hajjpackages',function(){
    return view('hajj/hajjpackages',[
        'hajjpackages' => Hajjpackage::all()]);   
})->name('hajjpackages');

//single hajjpackage page and each page paths including hajj package model 
Route::get('/hajjpackage/{id}', function($id){
    return view('hajj/hajjpackage', [
            'hajjpackage' => Hajjpackage::find($id)
    ]); 
})->name('hajjpackage');

//umrah packages page path ---------------------------------------------
//mentioning all umrahpackages pages and including umrah package model 
Route::get('/umrahpackages',function(){
    return view('umrah/umrahpackages',[
        'umrahpackages' => Umrahpackage::all()]);   
})->name('umrahpackages');

//single umrahpackage page and each page paths including umrah package model 
Route::get('/umrahpackage/{id}', function($id){
    return view('umrah/umrahpackage', [
            'umrahpackage' => Umrahpackage::find($id)
    ]); 
})->name('umrahpackage');

//Signup controller functions -----------------------------------
Route::get('registration', [RegController::class, 'singup']);
Route::post('store', [RegController::class, 'store']);

//Login controller functions ------------------------------------
Route::get('registration',[SessionController::class, 'login']);
Route::post('check',[SessionController::class, 'check']);

//Logout controller functions ------------------------------------
Route::group(['middleware'=>['auth']], function(){
Route::get('/logout', [LogOut::class, 'perform'])->name('logout.perform');
});


// //all hajjpackage Deluxe
// Route::get('/',function(){
//     return view('Hajj',[
//         'hajjDP' => hajjpackage::alldeluxe()
//     ]);   
// });

// //single hajjpackage Deluxe
// Route::get('/Hajj/{id}', function($id){
//     return view('Hajj', [
//             'hajjDP' => hajjpackage::findD($id)
//     ]);
// });



// //all hajjpackage Golden
// Route::get('/',function(){
//     return view('Hajj',[
//         'hajjGP' => hajjpackage::allgolden()
//     ]);   
// });

// //single hajjpackage Golden
// Route::get('/Hajj/{id}', function($id){
//     return view('Hajj', [
//             'hajjGP' => hajjpackage::findG($id)
//     ]);
// });


// //all hajjpackage Silver
// Route::get('/',function(){
//     return view('Hajj',[
//         'HajjPS' => hajjpackage::allsilver()
//     ]);   
// });

// //single hajjpackage Silver
// Route::get('/Hajj/{id}', function($id){
//     return view('Hajj', [
//             'HajjPS' => hajjpackage::findS($id)
//     ]);
// });

// //all hajjpackage Saver
// Route::get('/',function(){
//     return view('Hajj',[
//         'HajjPSv' => hajjpackage::allsaver()
//     ]);   
// });

// //single hajjpackage Silver
// Route::get('/Hajj/{id}', function($id){
//     return view('Hajj', [
//             'HajjPSv' => hajjpackage::findSv($id)
//     ]);
// });