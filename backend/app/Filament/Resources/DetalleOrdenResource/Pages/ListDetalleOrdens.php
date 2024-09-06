<?php

namespace App\Filament\Resources\DetalleOrdenResource\Pages;

use App\Filament\Resources\DetalleOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetalleOrdens extends ListRecords
{
    protected static string $resource = DetalleOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
