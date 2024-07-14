<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GalleryJsonMedia\JsonMedia\Concerns\InteractWithMedia;
use GalleryJsonMedia\JsonMedia\Contracts\HasMedia;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model implements HasMedia
{
    use HasFactory;
    use InteractWithMedia;

    protected $casts =[
        'images' => 'array'
    ];

    protected function getFieldsToDeleteMedia(): array {
        return ['images'];
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'service_projects');
    }
}
