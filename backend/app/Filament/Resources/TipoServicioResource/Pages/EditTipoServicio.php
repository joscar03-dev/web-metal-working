<?php

namespace App\Filament\Resources\TipoServicioResource\Pages;

use App\Filament\Resources\TipoServicioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTipoServicio extends EditRecord
{
    protected static string $resource = TipoServicioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
