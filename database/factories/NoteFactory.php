<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(0, 100),
            'user_id' => $this->faker->numberBetween(1, 10),
            'evaluation_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
