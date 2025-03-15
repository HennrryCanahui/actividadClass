<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tranportes extends Seeder
{
    public function run()
    {
        DB::table('transportes')->insert([
            [
                'codigo' => 'T001',
                'nombre' => 'Transporte Express',
                'razon_social' => 'Transporte Express S.A.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'T002',
                'nombre' => 'Carga Rápida',
                'razon_social' => 'Carga Rápida Ltda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'T003',
                'nombre' => 'Logística Segura',
                'razon_social' => 'Logística Segura S.A.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
   }
}