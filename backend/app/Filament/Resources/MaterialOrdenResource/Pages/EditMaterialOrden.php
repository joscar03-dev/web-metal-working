<?php

namespace App\Filament\Resources\MaterialOrdenResource\Pages;

use App\Filament\Resources\MaterialOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaterialOrden extends EditRecord
{
    protected static string $resource = MaterialOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
