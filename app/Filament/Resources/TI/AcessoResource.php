<?php

namespace App\Filament\Resources\TI;

use App\Filament\Resources\TI\AcessoResource\Pages;
use App\Filament\Resources\TI\AcessoResource\RelationManagers;
use App\Models\TI\Acesso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Fieldset;
use pxlrbt\FilamentExcel\Actions\Concerns\ExportableAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class AcessoResource extends Resource
{
    protected static ?string $model = Acesso::class;

    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static ?string $navigationGroup = 'TI';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()
                    ->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\TextInput::make('username'),
                Forms\Components\TextInput::make('password'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->copyable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->copyable()
                    ->toggleable()
                    ->searchable()
                    ->limit(25),
                Tables\Columns\TextColumn::make('username')
                    ->copyable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('password')
                    ->copyable()
                    ->toggleable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                    Tables\Actions\ViewAction::make()
                        ->iconButton(),
                    Tables\Actions\EditAction::make()
                        ->iconButton(),
                    Tables\Actions\DeleteAction::make()
                        ->iconButton(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAcessos::route('/'),
            'create' => Pages\CreateAcesso::route('/create'),
            'edit' => Pages\EditAcesso::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }

    public function getTableBulkActions()
    {
        return  [
            ExportBulkAction::make()
        ];
    }
}
