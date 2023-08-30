<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Use transactions to improve performance
         DB::beginTransaction();

         // Create 20 classrooms using the Classroom factory
         Classroom::factory(20)->create();
 
         DB::commit();
    }
}
