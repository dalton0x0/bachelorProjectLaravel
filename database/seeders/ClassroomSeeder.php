<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::factory()->create(['name' => 'BTS SIO SISR']);
        Classroom::factory()->create(['name' => 'BTS SIO SLAM']);
        Classroom::factory()->create(['name' => 'Bachelor CDA']);
    }
}
