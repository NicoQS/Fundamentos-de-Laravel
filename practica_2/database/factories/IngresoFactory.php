<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perfil;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingreso>
 */
class IngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monto' => fake()->randomFloat(2,60000,100000),
            'perfil_id' => function(){
                return Perfil::inRandomOrder()->pluck('id')->first();
            },
            
        ];
    }
}
