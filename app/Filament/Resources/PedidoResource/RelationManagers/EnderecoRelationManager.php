<?php

namespace App\Filament\Resources\PedidoResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EnderecoRelationManager extends RelationManager
{
    protected static string $relationship = 'endereco';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('primeiro_nome')
                    ->required()
                    ->maxLength(255),

                TextInput::make('sobrenome')
                    ->required()
                    ->maxLength(255),

                TextInput::make('celular')
                    ->required()
                    ->tel()
                    ->maxLength(20),

                TextInput::make('rua')
                    ->required()
                    ->maxLength(255),

                TextInput::make('numero')
                    ->label('Número')
                    ->required()
                    ->maxLength(20),

                TextInput::make('complemento')
                    ->maxLength(255),

                TextInput::make('bairro')
                    ->required()
                    ->maxLength(255),

                TextInput::make('cidade')
                    ->required()
                    ->maxLength(255),

                TextInput::make('estado')
                    ->label('UF')
                    ->required()
                    ->maxLength(255),

                TextInput::make('referencia')
                    ->label('Referência')
                    ->maxLength(255),

                TextInput::make('cep')
                    ->label('CEP')
                    ->required()
                    ->numeric()
                    ->maxLength(8),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('cep')
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->label('Nome'),

                Tables\Columns\TextColumn::make('celular'),

                Tables\Columns\TextColumn::make('cep')
                    ->label('CEP'),

                Tables\Columns\TextColumn::make('rua'),

                Tables\Columns\TextColumn::make('numero')
                    ->label('Numero'),

                Tables\Columns\TextColumn::make('complemento'),

                Tables\Columns\TextColumn::make('bairro'),

                Tables\Columns\TextColumn::make('cidade'),

                Tables\Columns\TextColumn::make('estado')
                    ->label('UF'),

                Tables\Columns\TextColumn::make('referencia')
                    ->label('Referência'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
