<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Result;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\ResultResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ResultResource\RelationManagers;
use App\Filament\Resources\ResultResource\RelationManagers\RequestDesignRelationManager;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-right-end-on-rectangle';

    protected static ?string $navigationGroup = 'Operation Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
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
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    TextColumn::make('id')->sortable()->searchable(),
                    TextColumn::make('email')->sortable()->searchable(),
                    TextColumn::make('designer')->sortable()->searchable(),
                    TextColumn::make('status')->sortable()->searchable(),
                ]),
                Panel::make([
                    Stack::make([
                        TextColumn::make('result')->sortable()->searchable()->markdown(),
                    ]),
                ])->collapsible(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('result')->markdown()
            ])->columns(columns: 1);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\RequestDesignRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResults::route('/'),
            'create' => Pages\CreateResult::route('/create'),
            'edit' => Pages\EditResult::route('/{record}/edit'),
        ];
    }
}
