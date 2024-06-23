<?php

namespace App\Providers\Filament;

use App\Filament\Pages\GympallActivities;
use BezhanSalleh\FilamentExceptions\FilamentExceptionsPlugin;
use Filament\FontProviders\SpatieGoogleFontProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Firefly\FilamentBlog\Blog;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentGeneralSettings\FilamentGeneralSettingsPlugin;
use Swis\Filament\Backgrounds\FilamentBackgroundsPlugin;
use Swis\Filament\Backgrounds\ImageProviders\MyImages;
use Tobiasla78\FilamentSimplePages\FilamentSimplePagesPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('kcp')
            ->login()
            ->brandName('جیم پل')
            ->brandLogo(asset('images/logo.svg'))
            ->favicon(asset('images/favicon.ico'))
            ->colors([
                'primary' => Color::hex('#FE8C36'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
//                Pages\Dashboard::class,
                GympallActivities::class
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->plugins([
                FilamentGeneralSettingsPlugin::make()
                    ->setTitle('تنظیمات')
                    ->setNavigationLabel('تنظیمات')
                    ->setNavigationGroup('سیستم')
                    ->setIcon('iconoir-settings'),
                FilamentSimplePagesPlugin::make()
                    ->setIcon('iconoir-page-edit')
                    ->setSort(20)
                    ->setNavigationLabel('صفحات')
                    ->prefixSlug('page'),
                FilamentBackgroundsPlugin::make()
                    ->showAttribution(false)
                    ->remember(0)
                    ->imageProvider(
                        MyImages::make()
                            ->directory('images/wallpapers')
                    )
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->font('vazir', provider: SpatieGoogleFontProvider::class);
    }
}
