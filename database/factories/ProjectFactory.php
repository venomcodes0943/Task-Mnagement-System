<?php

namespace Database\Factories;

use App\Models\User;
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
        $colors = ['#64748B', '#71717A', '#EF4444', '#F97316', '#EAB308', '#22C55E', '#14B8A6', '#0EA5E9', '#6366F1', '#EC4899', '#F43F5E'];
        return [
            'user_id' => User::query()->inRandomOrder()->value('id') ?? User::factory(),
            'name' => fake()->unique()->word(),
            'color' => fake()->randomElement($colors),
        ];
    }
}
