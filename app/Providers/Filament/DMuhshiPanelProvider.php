<?php

namespace App\Providers\Filament;

use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

class DMuhshiPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('dMuhshi')
            ->path('dMuhshi')
            ->login()
            ->registration()
            ->navigationGroups([
                'Monitoring Harian',
                'Surat Izin'
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('Portal')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/admin'),
                MenuItem::make()
                    ->label('Manajemen Umum')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/manajemen'),
            ])
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/DMuhshi/Resources'), for: 'App\\Filament\\DMuhshi\\Resources')
            ->discoverPages(in: app_path('Filament/DMuhshi/Pages'), for: 'App\\Filament\\DMuhshi\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/DMuhshi/Widgets'), for: 'App\\Filament\\DMuhshi\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
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
            ->plugins([
                FilamentFullCalendarPlugin::make()
                    ->selectable()
                    ->editable(),
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),

            ]);
    }
}
