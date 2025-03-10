<?php

namespace Database\Seeders; // ✅ Namespace musí být úplně nahoře

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PlantSeeder::class, // ✅ Registrace seedru
        ]);
    }
}