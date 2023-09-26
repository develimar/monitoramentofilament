<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO\EstadoResource\Pages;

use App\Filament\Resources\MONITORAMENTO\CONTATO\EstadoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEstados extends ManageRecords
{
    protected static string $resource = EstadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
