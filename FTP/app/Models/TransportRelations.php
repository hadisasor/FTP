<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportRelations extends Model
{
    use HasFactory;

    protected $table = 'transport_relations';
    protected $primaryKey = 'id';
    
}
