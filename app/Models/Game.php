<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'url',
    ];
    public function getDescriptionAttribute($value)
    {
        return substr($value, 1, 120);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //public $timestamps = false;

    public $timestamps = false;
} 