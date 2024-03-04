<?php

namespace App\Filament\Resources\ResultResource\Pages;

use App\Models\User;
use Filament\Actions;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use App\Filament\Resources\ResultResource;
use Filament\Resources\Pages\CreateRecord;

class CreateResult extends CreateRecord
{
    protected static string $resource = ResultResource::class;

    protected function beforeSave(): void
    {
        $result = $this->record;

        Notification::make()
            ->title('New Brand Created')
            ->icon('heroicon-o-shopping-bag')
            ->body("**New Brand {$result->name} created!**")
            ->actions([
                Action::make('View')->url(
                    ResultResource::getUrl('edit',['record'=>$result])
                ),
            ])
            ->sendToDatabase(auth()->user());
    }

    // protected function getRedirectUrl(): string
    // {
    //     // $name = Auth::user()->name;
    //     // Notification::make()
    //     //     ->success()
    //     //     ->title('Post Created By '.$name)
    //     //     ->body('New Post Has Been Saved')
    //     //     ->sendToDatabase(User::whereNot('id', auth()->user()->id)->get());
        
    //     Notification::make()
    //     ->success()
    //     ->title('Murid '.$this->name. ' telah mendaftar')
    //     ->sendToDatabase(User::whereHas('roles', function($query){
    //         $query->where('name', 'admin');
    //     })->get());

    //     return $this->previousUrl ?? $this->getResource()::getUrl('index');
    // }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Request Berhasil';
    }
}
