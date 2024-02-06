<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RequestDesign extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'email', 'brief', 'materi'];

    // public function user():BelongsTo
    // {
    //     return $this->belongsTo(related:User::class);
    // }

    public function requestDesign():BelongsTo
    {
        return $this->belongsTo(related:RequestDesign::class);
    }

    public function result():BelongsTo
    {
        return $this->belongsTo(related:Result::class);
    }
}

