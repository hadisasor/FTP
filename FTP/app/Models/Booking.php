<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function hajjPackage(){
        return $this->belongsTo(HajjPackage::class);  
    }
    
    public function umrahPackage(){
        return $this->belongsTo(UmrahPackage::class);  
    }

    public function booker(){
        return $this->belongsTo(User::class);  
    }

}
