<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO\ContatoMonitoramentoResource\Pages;

use App\Filament\Resources\MONITORAMENTO\CONTATO\ContatoMonitoramentoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageContatoMonitoramentos extends ManageRecords
{
    protected static string $resource = ContatoMonitoramentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
