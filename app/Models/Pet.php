<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'pet_category_id',
        'shelter_id',
        'name',
        'breed',
        'gender',
        'age_months',
        'size',
        'description',
        'image',
        'health_status',
        'status',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PetCategory::class, 'pet_category_id');
    }

    public function shelter(): BelongsTo
    {
        return $this->belongsTo(Shelter::class);
    }
}
