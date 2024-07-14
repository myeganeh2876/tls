<?php

namespace App\Filament\Resources\TestimonalResource\Pages;

use App\Filament\Resources\TestimonalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonals extends ListRecords
{
    protected static string $resource = TestimonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
