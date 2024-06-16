<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $colors = ['red', 'orange', 'gray', 'green', 'yellow', 'pink', 'purple', 'sky', 'teal', 'cyan', 'rose'];
        return [
            'name' => fake()->unique()->word(),
            'color' => fake()->randomElement($colors),
        ];
    }
}
