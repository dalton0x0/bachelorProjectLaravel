<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'min_value' => $this->faker->numberBetween(0, 0),
            'max_value' => $this->faker->numberBetween(1, 100),
            'teacher_id' => User::inRandomOrder()->first()->id ?? User::factory(),
        ];
    }
}
