<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transporte>
 */
class TransporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = \App\Models\Transporte::class;
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->word(),
            'nombre' => $this->faker->company(),
            'razon_social' => $this->faker->companySuffix(),
        ];
    }
}
