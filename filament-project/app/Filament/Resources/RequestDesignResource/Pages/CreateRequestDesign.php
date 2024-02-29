<?php

namespace App\Filament\Resources\RequestDesignResource\Pages;

use App\Filament\Resources\RequestDesignResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestDesign;
use Filament\Notifications\Notification;

// use App\Models\Result;

class CreateRequestDesign extends CreateRecord
{
    protected static string $resource = RequestDesignResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('User registered')
            ->body('The user has been created successfully.');
    }
}
