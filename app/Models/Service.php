<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GalleryJsonMedia\JsonMedia\Concerns\InteractWithMedia;
use GalleryJsonMedia\JsonMedia\Contracts\HasMedia;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array',
    ];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'service_projects');
    }
}
