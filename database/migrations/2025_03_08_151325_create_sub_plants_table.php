<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sub_plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->foreignId('parent_id')->constrained('plants')->onDelete('cascade'); // ✅ Spojení s `plants`
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_plants');
    }
};