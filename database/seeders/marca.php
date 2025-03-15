<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Marca extends Seeder
{
    public function run()
    {
        DB::table('marcas')->insert([
            ['descripcion' => 'Toyota', 'created_at' => now(), 'updated_at' => now()],
            ['descripcion' => 'Ford', 'created_at' => now(), 'updated_at' => now()],
            ['descripcion' => 'Chevrolet', 'created_at' => now(), 'updated_at' => now()],
            ['descripcion' => 'Honda', 'created_at' => now(), 'updated_at' => now()],
            ['descripcion' => 'Nissan', 'created_at' => now(), 'updated_at' => now()],
    ]);
   }
}
