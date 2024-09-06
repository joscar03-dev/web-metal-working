<?php

namespace App\Filament\Resources\TareaOrdenResource\Pages;

use App\Filament\Resources\TareaOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTareaOrden extends EditRecord
{
    protected static string $resource = TareaOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
