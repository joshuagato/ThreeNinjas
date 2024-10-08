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
        Schema::create('black_ninjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id');
            $table->string('fixtures');
            $table->string('tip_id');
            $table->boolean('results');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('black_ninjas');
    }
};
