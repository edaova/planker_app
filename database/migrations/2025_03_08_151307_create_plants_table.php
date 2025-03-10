<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('watering_frequency')->nullable();
            $table->string('fertilizer')->nullable();
            $table->integer('humidity')->nullable();
            $table->string('sunlight')->nullable();
            $table->string('temperature')->nullable();
            $table->boolean('pet_friendly')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable(); // ✅ Přidáno pro sub-rostliny
            $table->foreign('parent_id')->references('id')->on('plants')->onDelete('cascade'); // ✅ Odkaz na hlavní rostliny
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};