<?php

namespace App\Filament\Resources\CADASTRO\ModeloResource\Pages;

use App\Filament\Resources\CADASTRO\ModeloResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageModelos extends ManageRecords
{
    protected static string $resource = ModeloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
