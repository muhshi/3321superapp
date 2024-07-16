<?php

namespace App\Filament\DMuhshi\Resources\PermitResource\Pages;

use App\Filament\DMuhshi\Resources\PermitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermits extends ListRecords
{
    protected static string $resource = PermitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
