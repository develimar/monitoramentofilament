<?php

namespace App\Filament\Resources\CADASTRO\MarcaResource\Pages;

use App\Filament\Resources\CADASTRO\MarcaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMarcas extends ManageRecords
{
    protected static string $resource = MarcaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
