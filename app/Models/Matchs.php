<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matchs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'player1_id',
        'player2_id',
        'game_id',
        'score1',
        'score2',
        'winner_id',
    ];
    public function getDescriptionAttribute($value)
    {
        return substr($value, 1, 120);
    }

    public function player1(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function player2(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function games(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function winner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;
}
