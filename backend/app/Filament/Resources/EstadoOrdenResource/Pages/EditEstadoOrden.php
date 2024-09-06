<?php

namespace App\Filament\Resources\EstadoOrdenResource\Pages;

use App\Filament\Resources\EstadoOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstadoOrden extends EditRecord
{
    protected static string $resource = EstadoOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
