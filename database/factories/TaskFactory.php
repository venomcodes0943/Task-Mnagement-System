<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_id' => Schedule::query()->inRandomOrder()->value('id') ?? Schedule::factory(),
            'taskTitle' => fake()->word(),
            'description' => fake()->sentence(),
            'dueDate' => fake()->dateTime(),
            'assignTo' => fake()->name(),
            'schedule' => Schedule::query()->inRandomOrder()->value('title') ?? Schedule::factory()
        ];
    }
}
