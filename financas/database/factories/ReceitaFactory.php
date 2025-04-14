<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receita>
 */
class ReceitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => $this->faker->sentence,
            'categoria' => $this->faker->word,
            'valor' => $this->faker->randomFloat(2, 0, 10000),
            'data_referencia' => $this->faker->date(),
            'user_id' => \App\Models\User::factory()->create()->id,
        ];
    }
}
