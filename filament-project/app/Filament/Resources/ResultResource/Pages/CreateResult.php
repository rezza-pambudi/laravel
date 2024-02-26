<?php

namespace App\Filament\Resources\ResultResource\Pages;

use App\Filament\Resources\ResultResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateResult extends CreateRecord
{
    protected static string $resource = ResultResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Request Berhasil';
    }
}
