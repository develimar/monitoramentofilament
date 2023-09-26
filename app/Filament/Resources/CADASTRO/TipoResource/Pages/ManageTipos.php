<?php

namespace App\Filament\Resources\CADASTRO\TipoResource\Pages;

use App\Filament\Resources\CADASTRO\TipoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTipos extends ManageRecords
{
    protected static string $resource = TipoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
