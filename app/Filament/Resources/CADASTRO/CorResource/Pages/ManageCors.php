<?php

namespace App\Filament\Resources\CADASTRO\CorResource\Pages;

use App\Filament\Resources\CADASTRO\CorResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCors extends ManageRecords
{
    protected static string $resource = CorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
