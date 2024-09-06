<?php

namespace App\Filament\Resources\EstadoOrdenResource\Pages;

use App\Filament\Resources\EstadoOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstadoOrdens extends ListRecords
{
    protected static string $resource = EstadoOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
