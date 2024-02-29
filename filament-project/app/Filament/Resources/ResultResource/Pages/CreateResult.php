<?php

namespace App\Filament\Resources\ResultResource\Pages;

use App\Filament\Resources\ResultResource;
use Filament\Actions;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class CreateResult extends CreateRecord
{
    protected static string $resource = ResultResource::class;

    protected function getRedirectUrl(): string
    {
        // $name = Auth::user()->name;
        // Notification::make()
        //     ->success()
        //     ->title('Post Created By '.$name)
        //     ->body('New Post Has Been Saved')
        //     ->sendToDatabase(User::whereNot('id', auth()->user()->id)->get());
        
        Notification::make()
        ->success()
        ->title('Murid '.$this->name. ' telah mendaftar')
        ->sendToDatabase(User::whereHas('roles', function($query){
            $query->where('name', 'admin');
        })->get());
        
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Request Berhasil';
    }
}
