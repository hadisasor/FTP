<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinaDetail extends Model
{
    use HasFactory;
    protected $table = 'minas';
    protected $primaryKey = 'id';
}
