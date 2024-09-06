<?php

namespace App\Filament\Resources\TareaOrdenResource\Pages;

use App\Filament\Resources\TareaOrdenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTareaOrdens extends ListRecords
{
    protected static string $resource = TareaOrdenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
