<?php

namespace App\Models;

use App\Models\Scope\LastWeekScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;
    // protected $table = 'inna_nazwa'; //default - games
    // protected $primaryKey = 'id'; //default - id
    // protected $timestamps = false; //default - true
    // relations
    protected $attributes = [
        'metacritic_score' => null,
    ];
    protected $casts = [
        'metacritic_score' => 'integer',
        'steam_appid' => 'integer'
    ];
    public function getScoreAttribute(): ?int {
        return $this->metacritic_score;
    }
    public function getSteamAppIdAttribute(): ?int {
        return $this->steam_appid;
    }
    public function getShortDescriptionAttribute() {
        return $this->short_description;
    }
    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'game_genres');
    }
    public function publishers(): BelongsToMany {
        return $this->belongsToMany(Publisher::class, 'game_publishers');
    }
    // scopes
    public function scopeBest(Builder $query): Builder {
        return $query
            ->where('metacritic_score', '>', 90);
    }
    public function scopeGenre(Builder $query, int $genreId): Builder {
        return $query
            ->where('genre_id', $genreId);
    }
}
