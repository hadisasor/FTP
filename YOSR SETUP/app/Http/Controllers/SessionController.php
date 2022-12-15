<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('registration.login');

}


    public function check(){

        // $credentials = $request->validate([
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);
    

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return redirect()->to('/login')->with([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/');

        // if (Auth::attempt($credentials)){
        //     $request->session()->regenerate();

        //     return redirect()->to('/home');
        // }

        // return back()->with(['loginerror','either password or email is wrong',]);


    }

    // public function destroy(){
        
    //     auth()->logout();
    //     return redirect()->to('/login');
    // } 
    


}
