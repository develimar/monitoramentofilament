<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO\TipoContatoResource\Pages;

use App\Filament\Resources\MONITORAMENTO\CONTATO\TipoContatoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTipoContatos extends ManageRecords
{
    protected static string $resource = TipoContatoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
