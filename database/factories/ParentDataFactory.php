<?php

namespace Database\Factories;

use App\Models\ParentData;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParentData>
 */
class ParentDataFactory extends Factory
{
    protected $model = ParentData::class;

    public function definition(): array
    {
        $phone = preg_replace('/[^0-9]/', '', $this->faker->phoneNumber);
        $userIds = User::pluck('id'); // Get all user IDs

        return [
            'national_id_num' => $this->faker->numberBetween(10000000000000, 99999999999999), // 14-digit integer
            'national_id_face' => 'seeders_assets/photos/national_id_face.jpg', 
            'national_id_background' => 'seeders_assets/photos/national_id_background.jpg', 
            'address' => $this->faker->address, 
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
