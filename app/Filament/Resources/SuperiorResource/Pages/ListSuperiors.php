<?php

namespace App\Filament\Resources\SuperiorResource\Pages;

use App\Filament\Resources\SuperiorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuperiors extends ListRecords
{
    protected static string $resource = SuperiorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
