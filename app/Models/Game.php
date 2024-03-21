<?php

namespace App\Models;

use App\Models\Scope\LastWeekScope;
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
    protected $fillable = [
        'title', 'description', 'score', 'publisher_id', 'genre_id', 'published_at'
    ];
    protected static function booted() {
        static::addGlobalScope(new LastWeekScope);
    }
    public function genre(): BelongsTo {
        return $this->belongsTo(Genre::class);
    }
    // scopes
    public function scopeBest(Builder $query): Builder {
        return $query
            ->with('genre')
            ->where('score', '>', 9);
    }
    public function scopeGenre(Builder $query, int $genreId): Builder {
        return $query
            ->where('genre_id', $genreId);
    }
}
