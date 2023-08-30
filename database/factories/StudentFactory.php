<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id'); // Get all user IDs

        return [
        'student_code' => Str::upper($this->faker->unique()->bothify('??##')),
        'date_of_join' => $this->faker->date,
        'address' => $this->faker->address,
        'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
