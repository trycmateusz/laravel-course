<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;
    public function game(): HasMany {
        // fk: genre_id (wlasnie domyslnie to nazwa modelu na snake_case i dodalby _id, ale w drugim argumencie mozna zmienic nazwe)
        // domyslnie fk w innym modelu odpowiada kolumnie 'id' w obecnym modelu
        return $this->hasMany(Game::class);
    }
}
