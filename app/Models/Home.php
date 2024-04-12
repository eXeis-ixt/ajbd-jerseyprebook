<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'satus',
        'primary_color',
        'secondary_color',
        'text_color',
    ];

    public function jesrey(): HasMany {
        return $this->hasMany(Jersey::class);
    }
}
