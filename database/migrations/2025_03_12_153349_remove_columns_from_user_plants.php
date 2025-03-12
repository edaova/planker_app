<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_plants', function (Blueprint $table) {
            $table->dropColumn(['last_watered', 'watering_frequency', 'last_fertilized', 'notes']);
        });
    }

    public function down(): void
    {
        Schema::table('user_plants', function (Blueprint $table) {
            $table->date('last_watered')->nullable();
            $table->integer('watering_frequency')->nullable();
            $table->date('last_fertilized')->nullable();
            $table->text('notes')->nullable();
        });
    }
};
