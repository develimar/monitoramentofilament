<?php

namespace App\Filament\Resources\MONITORAMENTO\CONTATO;

use App\Filament\Resources\MONITORAMENTO\CONTATO\EstadoResource\Pages;
use App\Filament\Resources\MONITORAMENTO\CONTATO\EstadoResource\RelationManagers;
use App\Models\MONITORAMENTO\CONTATO\Estado;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EstadoResource extends Resource
{
    protected static ?string $model = Estado::class;

    protected static ?string $navigationGroup = 'MONITORAMENTO';

    protected static ?string $modelLabel = 'Estado';

    protected static ?string $pluralModelLabel = 'Estados';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Título')
                    ->maxLength(50),
                Forms\Components\TextInput::make('sigla')
                    ->label('UF')
                    ->maxLength(5),
                Forms\Components\Select::make('regiao_id')
                    ->relationship('regiao', 'name')
                    ->label('Região')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->label('Nome da Região')
                        ->required()
                        ->unique(),
                        Forms\Components\TextInput::make('description')
                            ->label('Descrição da Região')
                            ->maxLength(191),
                    ]),
                Forms\Components\Select::make('contatos')
                    ->multiple()
                    ->relationship('contatos_monitoramentos', 'name')
                    ->label('Nome do Contato')
                    ->createOptionForm([
                        Forms\Components\Select::make('tipo_contato_id')
                            ->relationship('tipo_contato', 'name')
                            ->label('Tipo do Contato')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tipo do Contato')
                                    ->required(),
                                Forms\Components\TextInput::make('description')
                                    ->label('Descrição do Tipo de Contato')
                                    ->maxLength(191),
                            ]),
                        Forms\Components\TextInput::make('name')
                            ->label('Nome do Contato')
                            ->maxLength(100),
                        Forms\Components\TextInput::make('contato')
                            ->label('Telefone do Contato')
                            ->maxLength(100),
                        Forms\Components\TextInput::make('descricao')
                            ->label('Descrição do Contato')
                            ->maxLength(191),
                        Forms\Components\Select::make('estados')
                            ->label('Estados do Contato')
                            ->multiple()
                            ->relationship('estados', 'name')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->label('Título do Estado')
                                    ->required(),
                                Forms\Components\TextInput::make('sigla')
                                    ->label('Sigla do Estado')
                                    ->maxLength(191),
                                Forms\Components\Select::make('regiao_id')
                                    ->relationship('regiao', 'name')
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->label('Nome da Região')
                                            ->required()
                                            ->unique(),
                                        Forms\Components\TextInput::make('description')
                                            ->label('Descrição da Região')
                                            ->maxLength(191),
                                    ]),
                            ])
                            ->preload()
                    ])
                    ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sigla')
                    ->label('UF')
                    ->searchable(),
                Tables\Columns\TextColumn::make('regiao.name')
                    ->label('Região')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data de Criação')
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
            'index' => Pages\ManageEstados::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
