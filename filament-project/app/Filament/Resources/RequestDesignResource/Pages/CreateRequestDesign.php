<?php

namespace App\Filament\Resources\RequestDesignResource\Pages;

use App\Filament\Resources\RequestDesignResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestDesign;

// use App\Models\Result;

class CreateRequestDesign extends CreateRecord
{
    protected static string $resource = RequestDesignResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        //insert the student
        $record =  static::getModel()::create($data);
        // print_r($record);
        
        // Create a new Guardian model instance
        $requestdesign = new RequestDesign();
        $requestdesign->email = 'email';
        $requestdesign->brief = value('brief');
        $requestdesign->materi = value('materi');

        // $requestdesign->id = $data['email''brief','materi'];

        // // Assuming 'student_id' is the foreign key linking to students
        $requestdesign->result_id = $record->result_id; 

        // // Save the Guardian model to insert the data
        $requestdesign->save();

        return $record;
    }
}
