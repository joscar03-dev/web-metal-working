<?php

namespace App\Filament\Resources\TipoServicioResource\Pages;

use App\Filament\Resources\TipoServicioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoServicios extends ListRecords
{
    protected static string $resource = TipoServicioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
