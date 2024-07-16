<?php

namespace App\Filament\DMuhshi\Resources\SuperiorResource\Pages;

use App\Filament\DMuhshi\Resources\SuperiorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuperior extends EditRecord
{
    protected static string $resource = SuperiorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
