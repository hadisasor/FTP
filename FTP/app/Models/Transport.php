<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $table = 'transports';
    protected $primaryKey = 'id';

    protected $fillable = ['car','destination'];

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
