<?php

namespace App\Filament\Pages;

use Noxo\FilamentActivityLog\Pages\ListActivities;

class GympallActivities extends ListActivities
{
    protected static ?string $slug = "activities";
    protected static ?string $title = 'فعایت ها';
    protected static ?string $navigationGroup = 'سیستم';
    protected static ?int $navigationSort = 10;
    // protected bool $isCollapsible = true;

    // protected bool $isCollapsed = false;

    // public function getTitle(): string
    // {
    //     return __('filament-activity-log::activities.title');
    // }

    // public static function getNavigationLabel(): string
    // {
    //     return __('filament-activity-log::activities.title');
    // }

}
