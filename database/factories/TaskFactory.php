<?php

namespace Database\Factories;

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
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'dueDate' => $this->faker->dateTime(),
            'createdAt' => $this->faker->dateTime(),
            'isCompleted' => $this->faker->boolean(),
            'priority' => $this->faker->text(),
            'category' => $this->faker->text(),
        ];
    }
}
