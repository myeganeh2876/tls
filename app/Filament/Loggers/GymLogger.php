<?php

namespace App\Filament\Loggers;

use App\Models\Gym;
use App\Filament\Resources\GymResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;

class GymLogger extends Logger
{
    public static ?string $model = Gym::class;

    public static function getLabel(): string | Htmlable | null
    {
        return GymResource::getModelLabel();
    }

    public static function resource(ResourceLogger $logger): ResourceLogger
    {
        return $logger
            ->fields([
                Field::make("title")

            ])
            ->relationManagers([
                //
            ]);
    }
}
