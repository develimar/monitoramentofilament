<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO\TelResource\Pages;

use App\Filament\Resources\MONITORAMENTO\CONTATO\TelResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTels extends ManageRecords
{
    protected static string $resource = TelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
