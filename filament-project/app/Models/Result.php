<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['id','email', 'designer', 'status', 'result', 'brief', 'materi'];

    public function Result():BelongsTo
    {
        return $this->belongsTo(related:Result::class);
    }
}
