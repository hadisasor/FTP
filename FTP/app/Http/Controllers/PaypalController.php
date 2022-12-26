<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';

use App\Models\HajjPackage;
use App\Models\UmrahPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Stripe\Stripe;


class PaypalController extends Controller
{

    
    public function checkout(Request $request, HajjPackage $hajj, UmrahPackage $umrah){



        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $package_name = str_replace(url('/'), '', url()->previous());    
        $umrahpackage_name = strstr($package_name, 'umrahpackage');
        
        if($umrahpackage_name == ''){
          $hajjpackage_name = strstr($package_name, 'hajjpackage');
          $package_id = preg_replace('/[^0-9\-]/', '', $hajjpackage_name);
          $hajj = $hajj::find((int)$package_id);
        }else{
          $package_id = preg_replace('/[^0-9\-]/', '', $umrahpackage_name);
          $umrah = $umrah::find((int)$package_id);
        }

   
        $pay_stat = $request->input('payment_stat');
        $fstname = $request->input('firstname');
        $lstname = $request->input('lastname');
        $phone =   $request->input('phone');
        $email = $request->input('email');
        $id_card = $request->input('ID_card'); 
        $group = $request->input('group');
        $group = preg_replace('/[^0-9\-]/', '', $group);
        
        //Payment amount
        $pay_amount = $request->input('PriceElement');
        $pay_amount = (string)preg_replace("/[^0-9.]/", "", $pay_amount);
        $pay_amount_point = $pay_amount."00";
        $amount_left = 0;
        $full_price = $request->input('full_price');
        $full_price = preg_replace('/[^0-9\-]/', '', $full_price);
        //Quarter and half of the price
        $quarter = (int)$full_price*0.3;
        $half = (int)$full_price*0.5;

        
        if($pay_amount == $quarter){
          $amount_left = $full_price - $pay_amount ;
        }elseif($pay_amount == $half){
          $amount_left = $full_price - $pay_amount;
        }

        //  return dd($full_price,$pay_stat,$pay_amount,$amount_left);

        $package_name = $package_name.'/'.$full_price.'/'.$pay_stat.'/'.$pay_amount.'/'.$amount_left;
         

        $session = \Stripe\Checkout\Session::create(
[
          'line_items' => [[
            'price_data' => [
              'currency' => 'thb',
              'product_data' => ['name' => 'package'],
              'unit_amount_decimal' => (int)$pay_amount_point,
            ],
            'quantity' => 1,
          ]],
          'mode' => 'payment',
          'success_url' => 'http://127.0.0.1:8000/success'.$package_name,
          'cancel_url' => 'http://127.0.0.1:8000/cancel',
      ]);

    return redirect($session->url);
    }


    public function success($package_name, $id, $full_price, $pay_stat, $amount_paid, $amount_left){

 

      // return dd($package_name, $id, $pay_stat, $amount_paid, $amount_left);
      $pay_stat = preg_replace('/[^A-Z a-z\-]/', '', $pay_stat);
      
      
      if($package_name == 'hajjpackage')
      {
      DB::insert('insert into bookings 
      (booker_id, hajj_package_id, umrah_package_id, total, payment_type, payment_status, paid_amount, left_amount) values(?,?,?,?,?,?,?,?)',
      [
      auth()->user()->id, 
      $id, 
      null,
      $full_price,
      'paypal', 
      $pay_stat, 
      $amount_paid, 
      $amount_left,
      ]);
      }
      else if ($package_name == 'umrahpackage')
      {
        DB::insert('insert into bookings 
        (booker_id, hajj_package_id, umrah_package_id, total, payment_type, payment_status, paid_amount, left_amount) values(?,?,?,?,?,?,?,?)',
        [
        auth()->user()->id, 
        null, 
        $id, 
        $full_price,
        'paypal', 
        $pay_stat, 
        $amount_paid, 
        $amount_left,
        ]);
      
      }
      
      
      return redirect()
      ->to('/my_profile')
      ->with( 'paid_successfully',"You've paid ".$package_name.'('.$id.") successfully");
    }




    public function cancel(){ 
      return back();
    }



}

