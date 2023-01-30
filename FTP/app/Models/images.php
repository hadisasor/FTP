<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'id';
    //Many packages can belong to one user function
    public function user()
    {   
        return $this->belongsTo(User::class);    
    }
}
    
