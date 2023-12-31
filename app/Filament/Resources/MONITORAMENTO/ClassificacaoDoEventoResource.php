<?php

namespace App\Filament\Resources\MONITORAMENTO;

use App\Filament\Resources\MONITORAMENTO\ClassificacaoDoEventoResource\Pages;
use App\Filament\Resources\MONITORAMENTO\ClassificacaoDoEventoResource\RelationManagers;
use App\Models\MONITORAMENTO\ClassificacaoDoEvento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassificacaoDoEventoResource extends Resource
{
    protected static ?string $model = ClassificacaoDoEvento::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'MONITORAMENTO';

    protected static ?string $modelLabel = 'Classificação';

    protected static ?string $pluralModelLabel = 'Classificacões dos Eventos';

    protected static ?string $slug = 'classificacoesdoseventos';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('description')
                    ->label('Descrição')
                    ->required()
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Descrição')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data de Criação')
                    ->dateTime('d/m/y H:i')
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageClassificacaoDoEventos::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
