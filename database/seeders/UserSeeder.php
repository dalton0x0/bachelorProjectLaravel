<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('label', 'admin')->first();
        $teacherRole = Role::where('label', 'teacher')->first();
        $studentRole = Role::where('label', 'student')->first();

        $classrooms = Classroom::all();

        User::factory()->create([
            'firstName' => 'Admin',
            'lastName' => 'Admin',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('administrator'),
            'role_id' => $adminRole->id,
            'classroom_id' => null,
        ]);

        $teacher = User::factory()->create([
            'firstName' => 'Adnan',
            'lastName' => 'RIHAN',
            'email' => 'adnan@example.com',
            'username' => 'adnan',
            'password' => Hash::make('teacher'),
            'role_id' => $teacherRole->id,
            'classroom_id' => null,
        ]);

        $teacher->taughtClassrooms()->attach($classrooms->pluck('id')->random(2));

        User::factory()
            ->count(3)
            ->create()
            ->each(function ($user) use ($studentRole, $classrooms) {
                $user->update([
                    'role_id' => $studentRole->id,
                    'classroom_id' => $classrooms->random()->id,
                ]);
            });
    }
}
