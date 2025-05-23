<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create(['label' => 'admin']);
        Role::factory()->create(['label' => 'teacher']);
        Role::factory()->create(['label' => 'student']);
    }
}
