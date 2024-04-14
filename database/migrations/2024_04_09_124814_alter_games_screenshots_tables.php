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
            $table->string('languages', 300)->nullable()->change();
        });
        Schema::table('screenshots', function (Blueprint $table) {
            $table->string('thumbnail', 300)->change();
            $table->string('url', 300)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->string('languages', 100)->nullable()->change();
        });
        Schema::table('screenshots', function (Blueprint $table) {
            $table->string('thumbnail', 100)->change();
            $table->string('url', 100)->change();
        });
    }
};
