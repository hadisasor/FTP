<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hajjpackage;
use App\Models\Umrahpackage;
use App\Models\User;
use App\Http\Controllers\CrudUser;
use App\Http\Controllers\CrudPackage;
use App\Http\Controllers\RegController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LogOut;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\RatingController;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Review;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;



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

   return redirect()->to('/home');
})->name('Home');


Route::get('/home', function () {
    return view('includes/Children',[
        'hajjpackages' => HajjPackage::all(),
        'umrahpackages' => UmrahPackage::all(),
        'hotels' => Hotel::all()
    ]);
})->name('Home');



// login page path  ---------------------------------------------
Route::get('/login',function(){

   //if registered redirect user to the homepage
   if(Auth::user())
   {
      return redirect('/');
   }
   else{
      return view('registration.login');
   } 
})->name('login');



// signup page path ---------------------------------------------
Route::get('/signup',function(){

 //if register redirect user to the homepage
   if(Auth::user())
   {
      return redirect('/');
   }else{
      return view('registration.signup');
   }
})->name('signup');

//Signup controller functions -----------------------------------------------------------------------
Route::get('registration', [RegController::class, 'singup']);
Route::post('store', [RegController::class, 'store']);
//Login controller functions ------------------------------------------------------------------------
Route::get('registration',[SessionController::class, 'login']);
Route::post('check',[SessionController::class, 'check']);
Route::get('/checkFromPackage', [SessionController::class, 'checkFromPackage']);


//Things Authorized users can do------------------------------------------------
Route::group(['middleware'=>['auth']], function(){

//profile page path-------------------------------------------------------------
Route::get('my_profile', function(){
   $user_id = User::find(auth()->user()->id);
   return view('profile.my_profile', 
   ['umrahpackages' => Umrahpackage::all(),
    'hajjpackages' => Hajjpackage::all(), 
    'bookings' => Booking::all(),
     'reviews' => Review::all(),
     'user_id' => null,
     'my_id' => $user_id,
     'hajjPage' => null,
     'umrahPage' => null,
     'myprofile' => 'true'
   ]);
})->name('my_profile');

//Logout controller functions ------------------------------------
Route::get('/logout', [LogOut::class, 'perform'])
->name('logout.perform');


Route::get('success/{package_name}/{id}/{full_price}/{pay_stat}/{amount_paid}/{amount_left}', 
[PaypalController::class, 'success'])->name('Successful_Payment');

// $full_price.'/'.$pay_stat.'/'.$pay_amount.'/'.$amount_left;


Route::get('cancel', [PaypalController::class, 'cancel'])
->name('Cancel_Payment');

});

//Others profile --------------------------------------------------
Route::get('profile/{id}', function($id){
   $user = User::find($id); 
   
   if($user){

      if(!auth()->user() || $user['id'] != auth()->user()->id){
         return view('profile.my_profile', [
         'umrahpackages' => Umrahpackage::where('user_id',$id)->get(),
         'hajjpackages' => Hajjpackage::where('user_id',$id)->get(),
         'bookedumrah' => Umrahpackage::all(),
         'bookedhajj' => Hajjpackage::all(),
         'user' => User::find($id) , 
         'bookings' => Booking::all(),
         'reviews' => Review::all(),
         'user_id' => $id,
         'hajjPage' => null,
         'umrahPage' => null,
         'myprofile' => null,
         'my_id' => null
      ]);
      }else{
         return redirect()->to('my_profile');
      }

   }else{return back();}


});



//Booking button from modal
Route::post('create-checkout-session',[PaypalController::class,'checkout'])
->name('bookingPage');


//hajj packages page path ---------------------------------------------
//mentioning all hajjpackages pages and including hajj package model ---------------------------------------------
Route::get('/hajjpackages',function(){
    return view('packages/hajj/hajjpackages',[
        'hajjpackages' => HajjPackage::all()]);   
})->name('hajjpackages');

//single hajjpackage page and each page paths including hajj package model ---------------------------------------------
Route::get('hajjpackage/{id}', function($id){

   $hajj = Hajjpackage::find($id);
   if($hajj)
   {
      $user_id = $hajj['user_id'];
      return view('packages/hajj/hajjpackage', 
      [  'hajjpackage' => HajjPackage::find($id),
         'users' => User::find($user_id),
         'reviews' => Review::all(),
         'user_id' => $user_id,
         'hajjPage' => 'true',
         'umrahPage' => 'true',
         'myprofile' => null,
         'my_id' => null
   ]); 
   }else{return redirect()->to('hajjpackages');}

})->name('hajjpackage{id}');


//umrah packages page path ---------------------------------------------
//mentioning all umrahpackages pages and including umrah package model ---------------------------------------------
Route::get('/umrahpackages',function(){
    return view('packages/umrah/umrahpackages',[
        'umrahpackages' => UmrahPackage::all()]);   
})->name('umrahpackages');

//single umrahpackage page and each page paths including umrah package model ---------------------------------------------
Route::get('umrahpackage/{id}', function($id){

    $umrah = Umrahpackage::find($id);
    if($umrah)
   {
      $user_id = $umrah['user_id'];
      return view('packages/umrah/umrahpackage', 
      [  'umrahpackage' => Umrahpackage::find($id),
         'users' => User::find($user_id),
         'reviews' => Review::all(),
         'user_id' => $user_id,
         'umrahPage' => 'true',
         'hajjPage' => 'true',
         'myprofile' => null,
         'my_id' => null
   ]); 
   }else{return redirect()->to('umrahpackages');}


})->name('umrahpackage{id}');




//Travel page path-------------------------------------------------------

Route::get('/travelpackages', function(){

   return view('packages.travel.travelpackages',);


});
//Visa path page------------------------------------------------------------------
Route::get('/Visa', function(){

   return view  ('Visa.Visa');

});
//knowledge path page--------------------------------------------------------

Route::get('/knowledge', function(){

   return view  ('knowledge.knowledge');

});

//about us path page
Route::get('/Aboutus', function(){

   return view  ('aboutus.aboutus');

});
Route::get('/Aboutus/Gallary',function(){
         return view('aboutus.gallary');

});


//Buy Package Page path-------------------------------------------------------
Route::get('services/buypackage', function(){

   return view('Packages.hajj.buypackage');

});

//hotels page path-------------------------------------------------------------
Route::get('/hotels', function(){
   return view('hotel.hotels',['hotels' => Hotel::all()]);
})->name('hotels');

Route::get('/hotels/{id}', function(){
   return view('hotel.hotel');
})->name('hotel');


//transportation page path-------------------------------------------------------------
Route::get('services/transportation', function(){
   return view('transportation.transports');
})->name('transpors');

Route::get('services/transportation/{id}', function(){
   return view('transportation.transport');
})->name('transport');


//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------

//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------


// Grouping these pages because it's only for Autherized access ---------------------------------------------
Route::group(['middleware' => ['auth','Admin']], function(){


Route::get('admin', function(){
   return view('admin.index', 
   ['bookings' => Booking::all(),
          'umrahpackages' => UmrahPackage::all(),
          'hajjpackages' => Hajjpackage::all(),
          'users' => User::all()
          ]
   );
})->name('dash');

// 

//find all hajj packages to CRUD-----------------------------------------------
Route::get('/admin/hajjpackages', function(){
   return view('admin.package_page.hajjpackages',
               ['hajjpackages'=>HajjPackage::all()]);
})->name('hajjpackages');
//find specific hajj packages CRUD-----------------------------------------------
Route::get('/admin/hajjpackages/{id}',function($id){
   return view('admin.package_page.edit_hajj',
   ['hajjpackage'=>HajjPackage::find($id),
          'webPath' => 'hajjpackages',
          'bookings' => Booking::all(),
          'hotels'=>Hotel::all()
         ]);
})->name('hajjpackage');


//--------------------------------------------------------------------------
//--------------------------------------------------------------------------


//find all umrah packages CRUD-----------------------------------------------
Route::get('/admin/umrahpackages', function(){
   return view('admin.package_page.umrahpackages',
         ['umrahpackages'=>UmrahPackage::all()]);
})->name('umrahpackages');

//find specific umrah packages CRUD-----------------------------------------------
Route::get('/admin/umrahpackages/{id}', function($id){
   return view('admin.package_page.edit_umrah',
   ['umrahpackage'=>UmrahPackage::find($id), 
          'webPath' => 'umrahpackages',
          'bookings' => Booking::all(),
          'hotels'=>Hotel::all()
         ]);
})->name('umrahpackage');

//Controllers -------------------------------------------------------
//Create Hajj page
Route::get('admin/create_hajj', function(){
   return view('admin.package_page.create_hajj',
   ['hajjpackage'=>HajjPackage::all(),
          'webPath' => 'hajj',
          'hotels'=>Hotel::all()
         ]);
  })->name('create_hajj');

//Create Umrah page ---------------------------------------------
Route::get('admin/create_umrah', function(){
   return view('admin.package_page.create_umrah',
   ['umrahpackage'=>UmrahPackage::all(),
          'webPath' => 'umrah',
          'hotels'=>Hotel::all()]);
})->name('create_umrah');

// Controllers --------------------------------------------------------------------------------------------------------
//Create new Hajj package
Route::post('createHajj',[CrudPackage::class,'createHajj']);
//Editing for updating the Hajj
Route::post('edit_hajj/{id}', [CrudPackage::class,'editingHajj']);
//Delete the Hajj package
Route::get('delete_hajj/{id}', [CrudPackage::class, 'deleteHajj']);

//Create new Umrah package ---------------------------------------------
Route::post('createUmrah',[CrudPackage::class,'createUmrah']);
//Editing for Umrah packages
Route::post('edit_umrah/{id}', [CrudPackage::class,'editingUmrah']);
//Delete the Umrah package
Route::get('delete_umrah/{id}', 
[CrudPackage::class, 'deleteUmrah']);


// //Create new Hajj package
// Route::post('createTravel',[CrudPackage::class,'createTravel']);
// //Editing for updating the Hajj
// Route::post('edit_Travel/{id}', [CrudPackage::class,'editingTravel']);
// //Delete the Hajj package
// Route::get('delete_Travel/{id}', [CrudPackage::class, 'deleteTravel']);


//-----------------------------------------------------------------------------------------------------------------------

Route::group(['middleware' => ['auth','SuperAdmin']], function(){
  
   //find All admins--------------------------------------------------
   Route::get('/admin/admins', function(){
      return view('admin.users_page.admins', 
      ['users'=>User::all()]
      );})->name('admins');

   Route::get('/admin/admins/{id}', function($id){
      return view('admin.users_page.edit_user', 
      ['user'=>User::find($id)]
      );})->name('adminPage');


// Route for Admins settings-------------------------------------------------
   Route::get('/admins/settings', function(){
         return view('admin/settings.packagemanagement');


   });




   //find all toksehs--------------------------------------------------
   Route::get('/admin/toksehs',function(){
      return view('admin.users_page.toksehs',
      ['users'=>User::all()]);
      })->name('toksehs');
      //find specific tokseh
      Route::get('/admin/toksehs/{id}',function($id){
         return view('admin.users_page.edit_user',
         ['user'=>User::find($id)]
         );
      })->name('tokseh');
      
      //find all Pilgrims-------------------------------------------------- 
      Route::get('/admin/pilgrims',function(){
         return view('admin.users_page.pilgrims',
         ['users'=>User::all()]
         );
      })->name('pilgrims');
      //find Specific pilgrim
      Route::get('/admin/pilgrims/{id}',function($id){
         return view('admin.users_page.edit_user',
         ['user'=>User::find($id)]
         );
      })->name('pilgrim');

      //Create user page ----------------------------------------------------
      Route::get('admin/create_user', function(){
            return view('admin.users_page.create_user');
         })->name('create_user');

      // create new user
      Route::post('createUser', 
      [CrudUser::class, 'createUser']);

      //edit user 
      Route::post('edit_user/{id}', 
      [CrudUser::class, 'editUser']);

      //delete user
      Route::get('delete_tokseh/{id}', [CrudUser::class,'deleteTokseh']);
      Route::get('delete_pilgrim/{id}', [CrudUser::class, 'deletePilgrim']);

      });

      
      //booked packages -------------------------------------------------------------------------
      Route::get('admin/hajj_bookings', function(){
         return view('admin.bookings.hajj_bookings',
      [  'hajjpackages' => Hajjpackage::all(),
               'bookings' => Booking::all(),
               'users' => User::all()
            ]);
      })->name('hajj_bookings');

      Route::get('admin/umrah_bookings', function(){
         return view('admin.bookings.umrah_bookings',
         ['umrahpackages' => Umrahpackage::all(),
                'bookings' => Booking::all(),
                'users' => User::all()
               ]);
      })->name('umrah_bookings');


      //Hotels managment ------------------------------------------------------------------------
         //Makkah
         Route::get('/makkah_hotels', function(){
            return view('admin.Services.hotels');
         });

         Route::get('/makkah_hotels/hotel', function(){
            return view('admin.Services.hotel');
         });
         
         //Madinah
         Route::get('madinah_hotels', function(){
         return view('admin.Services.hotels');
         });

         Route::get('/madinah_hotels/hotel', function(){
            return view('admin.Services.hotel');
         });
  
   });





   // Route::get('404',function(){
      //    return view('admin.404');
      // })->name('404');
      
      // Route::get('/admin/widget',function(){
      //    return view('admin.widget');
      // })->name('widget');
      
      // Route::get('/admin/form',function(){
      //    return view('admin.form');
      // })->name('form');
      
      // Route::get('/admin/table',function(){
      //    return view('admin.table');
      // })->name('table');
      
      // Route::get('/admin/chart',function(){
      //    return view('admin.chart');
      // })->name('chart');
      
      
      // Route::get('/admin/adminpage',function(){
      //    return view('admin.users_page.adminpage');
      // })->name('adminpage');
      