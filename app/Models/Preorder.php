<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preorder extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'back_name',
        'email',
        'number',
        'address',
        'city',
        'size',
        'jersey',
        'sleeve',

    ];
}
