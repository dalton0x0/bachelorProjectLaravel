<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Evaluation;
use App\Models\Note;
use App\Models\Role;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::factory()->create(['wording' => 'admin']);
        $prof = Role::factory()->create(['wording' => 'professor']);
        $student = Role::factory()->create(['wording' => 'student']);

        $btsSioSisr = Classroom::factory()->create(['name' => 'BTS SIO SISR']);
        $btsSioSlam = Classroom::factory()->create(['name' => 'BTS SIO SLAM']);
        $bachelorCda = Classroom::factory()->create(['name' => 'Bachelor CDA']);
        $classrooms = [$btsSioSisr, $btsSioSlam, $bachelorCda];

        User::factory()
            ->for($admin)
            ->create([
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => Hash::make('administrator')
            ]);

        $professor = User::factory()
            ->for($prof)
            ->hasAttached([$btsSioSlam, $bachelorCda])
            ->create([
                'firstname' => 'Adnan',
                'lastname' => 'RIHAN',
                'email' => 'adnan@example.com',
                'username' => 'adnan',
                'password' => Hash::make('professor')
            ]);

        User::factory()
            ->for($student)
            ->count(5)
            ->create()
            ->each(function ($user) use ($classrooms) {
                $user->classrooms()->attach(
                    $classrooms[array_rand($classrooms)]
                );
            });

        $evaluation = Evaluation::factory()
            ->create([
                'title' => 'Make MCD',
                'description' => 'Make MCD for your project of Bachelor !',
                'min_value' => 0,
                'max_value' => 20,
            ]);

        $evaluation->users()->attach($professor->id);

        $studentsInClassroom = $btsSioSlam->users()->where('role_id', $student->id)->get();

        foreach ($studentsInClassroom as $student) {
            Note::factory()
                ->create([
                    'value' => rand(0, 20),
                    'user_id' => $student->id,
                    'evaluation_id' => $evaluation->id,
                ]);
        }
    }
}
