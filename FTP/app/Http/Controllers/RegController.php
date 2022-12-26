<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\DuplicateMethodException;
use Illuminate\Support\Facades\Session;

class RegController extends Controller
{
public function create(){
    return view('registration.signup');
}


public function store(){

    
    $this->validate(request(), [        
        'email'=>'required|email',
        'lstname'=>'required',
        'fstname'=>'required',
        'password'=>'required',
        'phone'=>'required',
        'userType' => 'required',
    ]);
    

    
$user = User::create(request(['fstname', 'lstname','email','password','phone','userType']));


if($user){
    // auth()->login($user);
    return redirect()->to('/login')->with('success','You are signed up you can now login');
}else{
    return redirect()->to('/signup')->with(['fail' => 'there is something missing']);}

    
}



}
