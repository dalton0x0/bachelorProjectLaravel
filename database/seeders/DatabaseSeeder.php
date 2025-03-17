<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Role;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Role::factory()->create(['wording' => 'admin']);
        $prof = Role::factory()->create(['wording' => 'professor']);
        $student = Role::factory()->create(['wording' => 'student']);

        $btsSioSisr = Classroom::factory()->create(['name' => 'BTS SIO SISR']);
        $btsSioSlam = Classroom::factory()->create(['name' => 'BTS SIO SLAM']);
        $bachelorCda = Classroom::factory()->create(['name' => 'Bachelor CDA']);

        User::factory()
            ->for($student)
            ->hasClassrooms($btsSioSisr)
            ->count(3)
            ->create();

        User::factory()
            ->for($admin)
            ->create([
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => Hash::make('administrator')
            ]);

        User::factory()
            ->for($prof)
            ->hasClassrooms($btsSioSlam)
            ->hasClassrooms($bachelorCda)
            ->create([
                'firstname' => 'Adnan',
                'lastname' => 'RIHAN',
                'email' => 'adnan@example.com',
                'username' => 'adnan',
                'password' => Hash::make('professor')
            ]);
    }
}
