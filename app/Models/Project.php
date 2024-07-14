<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GalleryJsonMedia\JsonMedia\Concerns\InteractWithMedia;
use GalleryJsonMedia\JsonMedia\Contracts\HasMedia;
class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractWithMedia;

    protected $casts =[
        'images' => 'array'
    ];

    protected function getFieldsToDeleteMedia(): array {
        return ['images'];
    }

}
