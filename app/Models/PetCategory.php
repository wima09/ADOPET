<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PetCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class);
    }
}
