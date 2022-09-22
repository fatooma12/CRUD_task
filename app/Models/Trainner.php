<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        
    ];
}
