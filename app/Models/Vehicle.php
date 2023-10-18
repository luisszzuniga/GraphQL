<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "park_id"
    ];

    public function park(): BelongsTo
    {
        return $this->belongsTo(Park::class);
    }
}
