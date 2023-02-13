<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';
    protected $primaryKey = 'id';

    public function umrah(){

        return $this->belongsToMany(UmrahPackage::class);
    }

    public function hajj(){

        return $this->belongsToMany(HajjPackage::class);
    }
    public function travel(){

        return $this->belongsToMany(travel::class);
    }



}

    // public function hajj(){

    //     return $this->morphedByMany(HajjPackage::class, 'hotel_relation');

    // }
    
    // public function umrah(){

    //     return $this->morphedByMany(UmrahPackage::class, 'hotel_relation');

    // }