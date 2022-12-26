<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class SessionController extends Controller
{
    public function create()
    {
        // return view('registration.login');
        return view('hajj.hajjpackage');

}

    public function check(){
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return redirect()
            ->to('/login')
            ->with([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        return redirect()->to('/');
    }


    public function checkFromPackage(){

        $url = URL::current();
        $url = strstr($url,'package');
        $url = preg_replace('/[^a-zA-Z\']/', "", $url );



        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with([
                'message' => 'The email or password is incorrect, please try again',
            ]);
        }
   
        return back()->with([
            'success' => 'Register your information'
        ]);
    }


    




      // $credentials = $request->validate([
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);

    
        // if (Auth::attempt($credentials)){
        //     $request->session()->regenerate();

        //     return redirect()->to('/home');
        // }

        // return back()->with(['loginerror','either password or email is wrong',]);




    // public function destroy(){
        
    //     auth()->logout();
    //     return redirect()->to('/login');
    // } 
    


}
