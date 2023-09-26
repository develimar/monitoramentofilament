<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO\RegiaoResource\Pages;

use App\Filament\Resources\MONITORAMENTO\CONTATO\RegiaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRegiaos extends ManageRecords
{
    protected static string $resource = RegiaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
