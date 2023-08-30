<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Classroom;
use App\Models\Subject;
use Database\Factories\ParentDataFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionTableSeeder::class,
            UsersSeeder::class,
            CreateUserRolesSeeder::class,
            TeachersSeeder::class,
            ParentDataSeeder::class,
            ClassroomSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class
        ]); 
    }
}
