<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    /** @use HasFactory<\Database\Factories\ClassroomFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function students(): HasMany
    {
        return $this->HasMany(User::class);
    }

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function evaluations(): HasMany
    {
        return $this->HasMany(Evaluation::class);
    }
}
