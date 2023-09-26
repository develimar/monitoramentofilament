<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO;

use App\Filament\Resources\MONITORAMENTO\CONTATO\TelResource\Pages;
use App\Filament\Resources\MONITORAMENTO\CONTATO\TelResource\RelationManagers;
use App\Models\MONITORAMENTO\CONTATO\Tel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TelResource extends Resource
{
    protected static ?string $model = Tel::class;

    protected static ?string $navigationGroup = 'MONITORAMENTO';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('contato_monitoramento_id')
                    ->relationship('contato_monitoramento', 'name')
                    ->required(),
                Forms\Components\TextInput::make('numero')
                    ->mask(RawJs::make(<<<'JS'
        $input.startsWith('9') || $input.startsWith('10') ? '(99) 9999 9999' : '(99) 9 9999 9999'
    JS))
                    ->maxLength(30),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contato_monitoramento.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('numero')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTels::route('/'),
        ];
    }
}
