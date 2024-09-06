<?php

namespace App\Filament\Resources\TipoClienteResource\Pages;

use App\Filament\Resources\TipoClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoClientes extends ListRecords
{
    protected static string $resource = TipoClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
