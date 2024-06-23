<?php

namespace App\Models;

use GalleryJsonMedia\JsonMedia\Concerns\InteractWithMedia;
use GalleryJsonMedia\JsonMedia\Contracts\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gym extends Model implements HasMedia
{
    use HasFactory;
    use InteractWithMedia;
    protected $casts =[
        'images' => 'array'
    ];
    protected function getFieldsToDeleteMedia(): array {
        return ['images'];
    }
    public function fields() : BelongsToMany
    {
        return $this->BelongsToMany(Field::class, 'gym_fields');
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'gym_features');
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(GymImage::class);
    }


}
