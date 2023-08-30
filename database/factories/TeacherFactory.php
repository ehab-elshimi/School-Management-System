<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        $userIds = User::pluck('id'); // Get all user IDs

        return [
            'teacher_code' => Str::upper($this->faker->unique()->bothify('??##')),
            'address' => $this->faker->address,
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}