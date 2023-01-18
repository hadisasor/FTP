<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{

    function index(){
         return('registration.signup');
     }


     function add(Request $request){

         $request->validate([
             'fstname'=>'required',
             'lstname'=>'required',
             'email'=>'required|email',
             'phone'=>'required',
             'pswd'=>'required'
         ]);

         $query = DB::table('users')->insert([
            
             'fstname'=>$request->input('fstname'),
             'lstname'=>$request->input('lstname'),
             'email'=>$request->input('email'),
             'phone'=>$request->input('phone'),
             'password'=>$request->input('pswd')

         ]);

         if($query){
             return redirect('login')->with('success','You are now signed up you can login');
         }else{
             return redirect()->with('fail','Data was not inserted');
       }
    

     }
}
