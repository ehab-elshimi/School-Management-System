<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Seed Super Admin
        \App\Models\User::factory()->create([
            'email' => 'superadmin@email.com',
            'password' => bcrypt('12356789'),
            'fname' => 'Super Admin', 
            'lname' => 'Person',
            'gender' => 'male', 
            'dob' => '2000-01-01',
            'photo' => 'seeders_assets/avatars/users/super_admin.png'
        ]);
    // Seed Admin
        \App\Models\User::factory()->create([
            'email' => 'admin@email.com',
            'password' => bcrypt('12356789'),
            'fname' => 'Admin', 
            'lname' => 'Person',
            'gender' => 'male', 
            'dob' => '2000-01-01',
            'photo' => 'seeders_assets/avatars/users/admin.png'
        ]);
    // Seed Teacher
        \App\Models\User::factory()->create([
            'email' => 'teacher@email.com',
            'password' => bcrypt('12356789'),
            'fname' => 'Teacher', 
            'lname' => 'Person',
            'gender' => 'male', 
            'dob' => '2000-01-01',
            'photo' => 'seeders_assets/avatars/users/teacher.png'
        ]);
    // Seed Student
        \App\Models\User::factory()->create([
            'email' => 'student@email.com',
            'password' => bcrypt('12356789'),
            'fname' => 'Student', 
            'lname' => 'Person',
            'gender' => 'male', 
            'dob' => '2000-01-01',
            'photo' => 'seeders_assets/avatars/users/student.png'
        ]);
    // Seed Parent
        \App\Models\User::factory()->create([
            'email' => 'parent@email.com',
            'password' => bcrypt('12356789'),
            'fname' => 'Parent', 
            'lname' => 'Person',
            'gender' => 'male', 
            'dob' => '2000-01-01',
            'photo' => 'seeders_assets/avatars/users/parent.png'
        ]);
    // Seed Any User
        \App\Models\User::factory()->create([
            'email' => 'user@email.com',
            'password' => bcrypt('12356789'),
            'fname' => 'User', 
            'lname' => 'Person',
            'gender' => 'male', 
            'dob' => '2000-01-01',
            'photo' => 'seeders_assets/avatars/users/user.png'
        ]);
    //Seed Random Users
        User::factory()->count(10)->create();
    }
}
