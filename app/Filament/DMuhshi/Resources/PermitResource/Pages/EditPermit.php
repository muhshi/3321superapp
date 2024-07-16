<?php

namespace App\Filament\DMuhshi\Resources\PermitResource\Pages;

use App\Filament\DMuhshi\Resources\PermitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermit extends EditRecord
{
    protected static string $resource = PermitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
