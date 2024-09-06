<?php

namespace App\Filament\Resources\MaterialOrdenResource\Pages;

use App\Filament\Resources\MaterialOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaterialOrdens extends ListRecords
{
    protected static string $resource = MaterialOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
