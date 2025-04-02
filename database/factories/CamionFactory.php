<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camion>
 */
class CamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Camion::class;
    public function definition(): array
    {
        return [
            'placa' => strtoupper($this->faker->bothify('???-###')), // Formato: ABC-123
            'codigo_interno' => strtoupper($this->faker->bothify('??-####')), // Formato: XX-1234
            'id_transporte' => $this->faker->numberBetween(1, 10),
            'color' => $this->faker->colorName(), // Color en texto (Ej: Red, Blue)
            'modelo' => $this->faker->date(), // Genera una fecha válida
            'capacidad_toneladas' => (string) $this->faker->numberBetween(1, 20), // Se convierte a string
            'id_marca' => $this->faker->numberBetween(1, 10),
        ];
    }
}
