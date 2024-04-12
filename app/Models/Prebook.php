<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prebook extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'address',
        'city',
        'thana',
        'size',
        'sleeve',
        'collar',
    ];
}
