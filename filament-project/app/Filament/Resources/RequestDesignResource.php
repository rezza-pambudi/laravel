<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\RequestDesign;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Pages\Actions\CreateAction;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Facades\Route;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RequestDesignResource\Pages;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\RequestDesignResource\RelationManagers;

class RequestDesignResource extends Resource
{
    protected static ?string $model = RequestDesign::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationGroup = 'Form';

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['id'] = auth()->id();

    //     return $data;
    // }

    public static function form(Form $form): Form
    {

        // $defaultRequestId = Route::current()->parameter('id');
        return $form
            ->schema([
                Fieldset::make('Slahkan isi data berikut')
                    ->relationship('result', 'id_request')
                    ->schema([
                        TextInput::make('id')->unique(ignorable: fn ($record) => $record)->hidden(),
                        TextInput::make('email')->required()->email()->rule(
                            fn ($record) => 'unique:request_designs,email,'
                                . ($record ? $record->id : 'NULL')
                                . ',id'
                        )->maxLength(255)->default(''),
                        Textarea::make('materi')->required(),
                        MarkdownEditor::make('brief')->required(),
                    ])
                    

            ])->columns(columns: 1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    TextColumn::make('id')->sortable()->searchable(),
                    TextColumn::make('email')->sortable()->searchable(),
                ]),
                Panel::make([
                    Stack::make([
                        TextColumn::make('materi')->sortable()->searchable(),
                        TextColumn::make('brief')->sortable()->searchable()->markdown(),
                    ]),
                ])->collapsible()
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
                TextEntry::make('brief')->markdown()
            ])->columns(columns: 1);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ResultRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRequestDesigns::route('/'),
            'create' => Pages\CreateRequestDesign::route('/create'),
            'edit' => Pages\EditRequestDesign::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    // protected function getActions(): array
    // {
    //     return [
    //         CreateAction::make()
    //             ->using(function (array $data, string $RequestDesign): RequestDesign {
    //                 return $RequestDesign::create($data);
    //             })
    //     ];
    // }
}
