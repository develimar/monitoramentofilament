<?php

namespace App\Filament\Resources\TI\AcessoResource\Pages;

use App\Filament\Resources\TI\AcessoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcessos extends ListRecords
{
    protected static string $resource = AcessoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
