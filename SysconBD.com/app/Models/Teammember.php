<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
    use HasFactory;
    protected $fillable = [
        'tm_name' 
    ];

    protected $primaryKey = 'id';
}
