<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    
    public function rating(Request $request, $reviewed_id){

        $this->validate(request(), [
        'comment' => 'required',
        'stars' => 'required'
        ]);

        //comment, Stars
        $comment = $request->input('comment') ;
        $stars = $request->input('stars');
        $commentator_id = auth()->user()->id;

        DB::insert('insert into reviews (comment, user_id, rating) values(?,?,?)', 
        [$comment, $reviewed_id, $stars]);

        $review_id = Review::select('id')->orderBy('id','desc')->first(); // get the current package id
        $review_id = $review_id['id'];

        DB::insert('insert into review_user (user_id, review_id, reviewed_id) values(?,?,?)', 
        [$commentator_id, $review_id,  $reviewed_id]);

        // return dd($stars, $comment, $reviewed_id, $commentator_id, $review_id);
        return back()->with('commented','you have made a new comment');

    }


    public function deleteComment($id){

         DB::delete('delete from reviews where id = ?', [$id]);
        return back()->with('deleted','comment have been deleted');
    }

}
