<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogOut extends Controller
{
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login')->with([
                'logout' => 'you have logged out successfully']);
    }
}
