<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@email.com',
            'password' => bcrypt('12356789'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12356789'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@email.com',
            'password' => bcrypt('12356789'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Student',
            'email' => 'student@email.com',
            'password' => bcrypt('12356789'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Parent',
            'email' => 'parent@email.com',
            'password' => bcrypt('12356789'),
        ]);
    }
}
