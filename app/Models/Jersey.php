<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jersey extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function jersey(): BelongsTo{
        return $this->belongsTo(Home::class);
    }
}
