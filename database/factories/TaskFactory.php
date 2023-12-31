<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\user;

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
    public function definition()
    {
        $user = User::all()->random();
        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'is_done' => $this->faker->boolean(),
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'due_date' => $this->faker->dateTime(),
            'user_id' => User::all()->random(),
            'category_id' => $user->categories->random(),
        ];
    }
}
