<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'details';
    protected $primaryKey = 'id';

    protected $fillable = ['information'];
    
    public function hajjpackage(){
        return $this->BelongsTo(HajjPackage::class);
    }


    public function umrahpackage(){
        return $this->BelongsTo(UmrahPackage::class);
    }

}

