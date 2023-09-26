<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO;

use App\Filament\Resources\MONITORAMENTO\CONTATO\ContatoMonitoramentoResource\Pages;
use App\Filament\Resources\MONITORAMENTO\CONTATO\ContatoMonitoramentoResource\RelationManagers;
use App\Models\MONITORAMENTO\CONTATO\ContatoMonitoramento;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContatoMonitoramentoResource extends Resource
{
    protected static ?string $model = ContatoMonitoramento::class;

    protected static ?string $navigationGroup = 'MONITORAMENTO';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tipo_contato_id')
                    ->relationship('tipo_contato', 'name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\TextInput::make('description')
                            ->maxLength(191),
                    ]),
                Forms\Components\TextInput::make('name')
                    ->maxLength(100),
                Forms\Components\TextInput::make('contato')
                    ->maxLength(100),
                Forms\Components\TextInput::make('descricao')
                    ->maxLength(191),
                Forms\Components\Select::make('estados')
                    ->multiple()
                    ->relationship('estados', 'name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\TextInput::make('sigla')
                            ->maxLength(191),
                        Forms\Components\Select::make('regiao_id')
                            ->relationship('regiao', 'name')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->unique(),
                                Forms\Components\TextInput::make('description')
                                    ->maxLength(191),
                            ]),
                    ])
                    ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contato')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tels.numero')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_contato.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ManageContatoMonitoramentos::route('/'),
        ];
    }
}
