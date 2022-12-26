<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Rating extends Component
{
    public  $comment, $stars;
    public $user_id, $hajjPage, $umrahPage;
    public $myprofile;
    
    protected $rules = [
        'comment' => 'required',
        'stars' => 'required',
    ];

    public $listeners =
     ['updateRate' => 'refresh'];

    public function comment($reviewed_id){
        $validatedData = $this->validate();      
        $comment = $this->comment;
        $stars = $this->stars;
        $commentator_id = auth()->user()->id;

        // return dd($comment, $stars, $commentator_id, $reviewed_id);

        DB::insert('insert into reviews (comment, user_id, rating) values(?,?,?)', 
        [$comment, $reviewed_id, $stars]);

        $review_id = Review::select('id')->orderBy('id','desc')->first(); // get the current package id
        $review_id = $review_id['id'];

        DB::insert('insert into review_user (user_id, review_id, reviewed_id) values(?,?,?)', 
        [$commentator_id, $review_id,  $reviewed_id]);
        
        $this->emit('updateComment');
        return back();

    }

    public function render()
    {

        $userId1 = strstr(URL::current(), 'profile');
        $userId1 = preg_replace('/[^0-9]/', '', $userId1);
        $hajjPage = $this->hajjPage;
        $umrahPage = $this->umrahPage;
        $myprofile = $this->myprofile;
        
        // return dd($userId,$userId1);
        return view('livewire.rating', 
  ['reviews' => Review::all(), 
         'users' => User::all(),
        ]);
        }


        
    // public function deleteComment($id){

    //     DB::delete('delete from reviews where id = ?', [$id]);
    //     return back()->with('deleted','comment have been deleted');
    // }

}
