<?php

namespace App\Filament\Loggers;

use App\Models\City;
use App\Filament\Resources\CityResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;

class CityLogger extends Logger
{
    public static ?string $model = City::class;

    public static function getLabel(): string | Htmlable | null
    {
        return CityResource::getModelLabel();
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
