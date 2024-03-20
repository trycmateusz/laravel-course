<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory;
    // protected $table = 'inna_nazwa'; //default - games
    // protected $primaryKey = 'id'; //default - id
    // protected $timestamps = false; //default - true
    // relations
    public function genre(): BelongsTo {
        return $this->belongsTo(Genre::class);
    }
    // scopes
    public function scopeBest(Builder $query): Builder {
        return $query->where('score', '>', 9);
    }
}
