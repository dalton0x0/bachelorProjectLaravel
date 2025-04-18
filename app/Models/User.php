<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'username',
        'password',
        'role_id',
    ];

    protected $hidden = [
        'password'
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function studentClassroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function taughtClassrooms(): BelongsToMany
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function evaluations(): HasMany
    {
        return $this->HasMany(Evaluation::class, 'teacher_id');
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
