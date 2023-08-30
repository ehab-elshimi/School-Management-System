<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'section' => Str::upper($this->faker->bothify('??#')),
            'capacity' => $this->faker->numberBetween(20, 100),
            'room_type' => $this->faker->randomElement(['computers_lab', 'classroom', 'auditorium']),
        ];
    }
}

