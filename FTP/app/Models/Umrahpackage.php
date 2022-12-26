<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class UmrahPackage extends Model
{
    use HasFactory;

    protected $table = 'umrah_packages';
    protected $primaryKey = 'id';

    //Many packages can belong to one user function
    public function user()
    {  
        return $this->belongsTo(User::class);    
    }

    //Many packages can belong to many hotels function
    public function hotels(){
        return $this->belongsToMany(Hotel::class);   
    }
  
    public function details(){
        return $this->hasMany(Detail::class);
    }

    //Many packages can belong to many transports function
    public function transports(){
        return $this->belongsToMany(Transport::class); 
    }

}
