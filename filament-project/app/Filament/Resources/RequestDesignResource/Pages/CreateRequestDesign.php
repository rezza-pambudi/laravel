<?php

namespace App\Filament\Resources\RequestDesignResource\Pages;

use App\Filament\Resources\RequestDesignResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestDesign;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

// use App\Models\Result;

class CreateRequestDesign extends CreateRecord
{
    protected static string $resource = RequestDesignResource::class;

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

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('User registered')
            ->body('The user has been created successfully.');
    }
}
