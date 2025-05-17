<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Despesa>
 */
class DespesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory()->create()->id,
            'descricao' => $this->faker->sentence,
            'categoria' => $this->faker->word,
            'valor' => $this->faker->randomFloat(2, 10, 1000),
            'data_referencia' => $this->faker->date(),
            'is_recorrente' => $this->faker->boolean,
        ];
    }
}
