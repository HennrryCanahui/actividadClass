<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Camion extends Seeder
{
    public function run()
    {
        DB::table('camiones')->insert([
            [
                'placa' => 'P123ABC',
                'codigo_interno' => 'C001',
                'id_transporte' => 1, // Asegúrate de que el transporte con ID 1 existe
                'color' => 'Rojo',
                'modelo' => '2020-01-01',
                'capacidad_toneladas' => '15 toneladas',
                'id_marca' => 1, // Asegúrate de que la marca con ID 1 existe
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'placa' => 'P456DEF',
                'codigo_interno' => 'C002',
                'id_transporte' => 2,
                'color' => 'Azul',
                'modelo' => '2018-01-01',
                'capacidad_toneladas' => '10 toneladas',
                'id_marca' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'placa' => 'P789GHI',
                'codigo_interno' => 'C003',
                'id_transporte' => 3,
                'color' => 'Blanco',
                'modelo' => '2022-01-01',
                'capacidad_toneladas' => '20 toneladas',
                'id_marca' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
   ]);
   }
}
