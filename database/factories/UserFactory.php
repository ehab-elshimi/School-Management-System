<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    protected $model = \App\Models\User::class;

    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('12356789'),
            'fname' => $this->faker->firstName($gender),
            'lname' => $this->faker->lastName,
            'gender' => $gender,
            'dob' => $this->faker->date,
            'photo' => 'seeders_assets/avatars/users/user.png',
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
