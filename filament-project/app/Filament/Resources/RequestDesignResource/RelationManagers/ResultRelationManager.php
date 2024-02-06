<?php

namespace App\Filament\Resources\RequestDesignResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class ResultRelationManager extends RelationManager
{
    protected static string $relationship = 'Result';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make(name: 'email')->required()->email()->rule(
                    fn ($record) => 'unique:request_designs,email,'
                        . ($record ? $record->id : 'NULL')
                        . ',id'
                ),
                Select::make('designer')->options([
                    'Riyansyah' => 'Riyansyah',
                    'Naufal' => 'Naufal',
                    'Ferry' => 'Ferry',
                    'Erlangga' => 'Erlangga'
                ]),
                Select::make('status')->options([
                    'On Progress' => 'On Progress',
                    'Done' => 'Done',
                    'Revision' => 'Revision',
                    'Hold' => 'Hold',
                    'Cancel' => 'Cancel',
                    'Test' => 'Test',
                ]),
                Textarea::make('result')->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('email'),
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
