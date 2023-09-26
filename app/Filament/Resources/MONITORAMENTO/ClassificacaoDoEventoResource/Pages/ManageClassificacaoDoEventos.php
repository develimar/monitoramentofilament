<?php

namespace App\Filament\Resources\MONITORAMENTO\ClassificacaoDoEventoResource\Pages;

use App\Filament\Resources\MONITORAMENTO\ClassificacaoDoEventoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageClassificacaoDoEventos extends ManageRecords
{
    protected static string $resource = ClassificacaoDoEventoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
