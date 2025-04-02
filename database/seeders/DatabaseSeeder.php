<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Camion;
use App\Models\Marca;
use App\Models\Transporte;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        Marca::factory(10)->create();
        Transporte::factory(10)->create();
        Camion::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}