<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ✅ Nejprve definuj sloupec
            $table->unsignedBigInteger('plant_id'); // ✅ Pak definuj sloupec
            $table->string('plant_name')->nullable();
            $table->enum('event_type', ['watering', 'fertilizer']);
            $table->date('event_date');
            $table->text('notes')->nullable();
            $table->timestamps();

            // ✅ Nyní vytvoř cizí klíče
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
