<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('plant_id')->constrained()->onDelete('cascade');
            $table->string('plant_name')->nullable();
            $table->date('last_watered')->nullable();
            $table->string('watering_frequency')->nullable();
            $table->date('last_fertilized')->nullable();
            $table->string('fertilizer')->nullable(); // ✅ OPRAVENO - chybějící sloupec
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_plants');
    }
};
