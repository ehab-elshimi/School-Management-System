<?php

namespace Database\Seeders;

use App\Models\ParentData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parent_data')->truncate();

        ParentData::factory(60)->create();
    }
}
