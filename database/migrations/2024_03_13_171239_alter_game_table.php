<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('publisher');

            $table->integer('publisher_id');
            $table->date('published_at');
            $table->set('tags', ['Co-Op', 'Multiplayer', 'Singleplayer', 'Souls-like'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('publisher_id');
            $table->dropColumn('published_at');
            $table->dropColumn('tags');

            $table->string('publisher', 100);
        });
    }
};
