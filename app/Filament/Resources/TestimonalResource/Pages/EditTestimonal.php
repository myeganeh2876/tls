<?php

namespace App\Filament\Resources\TestimonalResource\Pages;

use App\Filament\Resources\TestimonalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonal extends EditRecord
{
    protected static string $resource = TestimonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
