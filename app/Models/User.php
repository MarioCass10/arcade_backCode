<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'name',
        'telephone',
        'password',
    ];
    public function getDescriptionAttribute($value)
    {
        return substr($value, 1, 120);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function matchs(): BelongsTo
    {
        return $this->hasMany(Matchs::class);
    }

    public $timestamps = false;
}




