<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batman extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'back_name',
        'number',
        'email',
        'address',
        'city',
        'thana',
        'size',
        'jersey',
        'sleeve',
        'collar',
    ];
}
