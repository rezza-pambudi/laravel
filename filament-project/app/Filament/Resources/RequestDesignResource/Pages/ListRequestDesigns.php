<?php

namespace App\Filament\Resources\RequestDesignResource\Pages;

use App\Filament\Resources\RequestDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestDesigns extends ListRecords
{
    protected static string $resource = RequestDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
