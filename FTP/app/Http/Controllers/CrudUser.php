<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;

class CrudUser extends Controller
{

    public function createUser(Request $request){
        
        $this->validate(request() ,[
            'fstname'=>'required',
            'lstname'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'userType'=>'required',
            'email' => 'required|unique',
        ]);

        $fstname =  $request->input('fstname');
        $lstname =  $request->input('lstname');
        $email =    $request->input('email');
        $password = $request->input('password');
        $phone =    $request->input('phone');
        $userType = $request->input('userType');
        
        DB::insert('insert into users (fstname,lstname,email,password,phone,userType) values(?,?,?,?,?,?)',
                                    [$fstname, $lstname, $email, $phone,$password, $userType]
        );

        if($userType == 'Tokseh'){
        return redirect()->to('admin/toksehs')->with('added',$userType.' user has been created successfully');
        }else if ($userType == 'Pilgrim'){
        return redirect()->to('admin/pilgrims')->with('added',$userType.' user has been created successfully');
        }
    }


    public function editUser(Request $request, $id){
        
        $this->validate(request() ,[
            'fstname'=>'required',
            'lstname'=>'required',
            'password'=>'required',
            'email' => 'required',
            'phone'=>'required',
            'userType'=>'required',
        ]);

        $fstname = $request->input('fstname');
        $lstname = $request->input('lstname');
        $email =    $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $userType = $request->input('userType');

        DB::update('update users set fstname = ?, lstname = ?, email = ?, password = ?, phone = ?, userType = ? where id = ?'
        ,[ $fstname,$lstname, $email,$password,$phone,$userType, $id]);

        if ($userType == 'Pilgrim'){
            return redirect()->to('admin/pilgrims')->with('edited',$userType.' user have been edited');
        }else if ($userType == 'Tokseh'){
            return redirect()->to('admin/toksehs')->with('edited',$userType.' user have been edited');
        } 

    }

    public function deleteTokseh($id){
        $userType = 'Tokseh';
        DB::delete('delete from users where id =?', [$id]);
        return redirect('admin/toksehs')->with('deleted',$userType.' user have been deleted successfully');
    }

    
    public function deletePilgrim($id){
        $userType = 'Pilgrim';
        DB::delete('delete from users where id =?', [$id]);
        return redirect('admin/pilgrims')->with('deleted',$userType.' user have been deleted successfully');
    }

   








}
