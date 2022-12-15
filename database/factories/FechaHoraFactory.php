<?php

namespace Database\Factories;

use App\Models\Hora;
use App\Models\Fecha;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FechaHoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->unique()->randomNumber(1),
            'fk_fecha' => fake()->randomElement(Fecha::all())['fecha'],
            'id_hora' => fake()->randomElement(Hora::all())['id'],
            'estado' => fake()->randomElement(['no-reservada', 'reservada']),
            'eleccion' => fake()->randomElement(['comida', 'cena']),
        ];
    }
}
