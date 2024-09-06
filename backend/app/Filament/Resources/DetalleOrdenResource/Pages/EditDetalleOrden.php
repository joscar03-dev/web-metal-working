<?php

namespace App\Filament\Resources\DetalleOrdenResource\Pages;

use App\Filament\Resources\DetalleOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetalleOrden extends EditRecord
{
    protected static string $resource = DetalleOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
