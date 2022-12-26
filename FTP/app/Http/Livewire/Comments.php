<?php

namespace App\Http\Livewire;


use App\Models\Review;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

use function Termwind\render;

class Comments extends Component
{



    protected $listeners = ['updateComment' => 'added'];
    public $user_id, $hajjPage, $umrahPage, $myprofile, $my_id;

  
    public function render()
    {
   
        $userId1 = strstr(URL::current(), 'profile');
        $userId1 = preg_replace('/[^0-9]/', '', $userId1);        
        $user_id = $this->user_id;
  
        // return dd($hajjPage, $umrahPage, $user_id );

        return view('livewire.comments',
  ['reviews' => Review::all(), 
         'users' =>  User::all(),
         'user1' => User::find($user_id),
        //  'user1'=>  User::find($userId1),
         ]
        );

    }

    public function added(){
        return back()->with('commented','new comment added');
    }

    public function deleteComment($id){
        DB::delete('delete from reviews where id = ?', [$id]);
       return back()->with('deleted','deleting comment');
   }

}
