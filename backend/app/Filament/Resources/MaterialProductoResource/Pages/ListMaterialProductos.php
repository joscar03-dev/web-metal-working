<?php

namespace App\Filament\Resources\MaterialProductoResource\Pages;

use App\Filament\Resources\MaterialProductoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaterialProductos extends ListRecords
{
    protected static string $resource = MaterialProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
